<?php

namespace App\Exports;

use App\Models\Entrega;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EntregasExport implements FromCollection, WithMapping, WithHeadings, WithStyles, WithCustomStartCell, WithEvents
{
    public function collection()
    {
        return Entrega::where('state', 'Entregado')
            ->with(['solicitud.user', 'solicitud.epp', 'solicitud.sede', 'solicitud.area'])
            ->get();
    }

    public function map($entrega): array
    {
        return [
            $entrega->solicitud->user->name ?? 'N/A',
            $entrega->solicitud->user->card ?? 'N/A',
            $entrega->solicitud->epp->name ?? 'N/A',
            $entrega->solicitud->sede->name ?? 'N/A',
            $entrega->solicitud->area->name ?? 'N/A',
            $entrega->solicitud->cantidad ?? 0,
            $entrega->state,
            $entrega->updated_at ? $entrega->updated_at->format('d/m/Y') : 'N/A',
              ];
    }

    public function startCell(): string
    {
        return 'A3'; // La fila 2 queda libre para el título
    }

    public function headings(): array
    {
        return [
            'Usuario', 'Identificación', 'EPP', 'Sede', 'Área', 'Cantidad', 'Estado', 'Fecha de Entrega', 'Firma'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            2 => [ // Fila 2: Título principal
                'font' => ['bold' => true, 'size' => 14],
                'alignment' => ['horizontal' => 'center'],
            ],
            3 => [ // Fila 3: Encabezados
                'font' => ['bold' => true],
                'fill' => [
                    'fillType' => 'solid',
                    'color' => ['rgb' => 'F2F2F2'], // Fondo gris claro
                ],
                'alignment' => ['horizontal' => 'center'],
            ],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                // Agregar el título en la fila 2
                $sheet->getColumnDimension('I')->setWidth(60); // Ajusta el LARGO de la fila
                $sheet->mergeCells('A1:I2');
                $sheet->setCellValue('A2', 'Reporte de Entregas');

                // Aplicar estilo al título
                $sheet->getStyle('A2')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 14],
                    'alignment' => ['horizontal' => 'center'],
                ]);

                // Ajustar automáticamente el ancho de las columnas
                foreach (range('A', 'I') as $col) {
                    $sheet->getColumnDimension($col)->setAutoSize(true);

                  // Aplicar bordes gruesos a la tabla completa
                $sheet->getStyle('A1:I' . $sheet->getHighestRow())->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM, // Bordes medianos
                        'color' => ['rgb' => '000000'], // Negro
                         ],
                      ],
                 ]);

                }
                foreach (range(4, $sheet->getHighestRow()) as $row) {
                    $sheet->getRowDimension($row)->setRowHeight(60);// Ajusta el alto de la fila
                }
                $row = 4; // Empieza en la fila 4 (después del encabezado)
                foreach ($this->collection() as $entrega) {
                    if (!empty($entrega->solicitud->user->signature)) {
                        $signaturePath = storage_path('app/public/Signature/' . $entrega->solicitud->user->signature);

                        if (file_exists($signaturePath)) {
                            $drawing = new Drawing();
                            $drawing->setName('Firma');
                            $drawing->setDescription('Firma del usuario');
                            $drawing->setPath($signaturePath);
                            $drawing->setOffsetX(15); // Ajustar la posición horizontal
                            $drawing->setOffsetY(10); // Ajustar la posición vertical
                            $drawing->setWidth(120); // Aumentar un poco el ancho
                            $drawing->setHeight(60); // Aumentar un poco la altura
                            $drawing->setResizeProportional(true); // Mantiene la relación de aspecto
                            $drawing->setCoordinates('I' . $row);
                            $drawing->setOffsetX(5);
                            $drawing->setOffsetY(5);
                            $drawing->setWorksheet($event->sheet->getDelegate());
                        }
                    }
                    $row++;
                }
            },
        ];
    }
}
