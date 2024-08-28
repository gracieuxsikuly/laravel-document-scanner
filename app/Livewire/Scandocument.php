<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Scandocument extends Component
{
    public $filePath;
    // #[On('fileScanned')]
    public $selectedPrinter;
    public function scan()
    {
        if (!$this->selectedPrinter) {
            $this->dispatch('scanNote'); // Émet un événement en cas d'échec
            // Optionnel : Envoyer un message d'erreur si aucune imprimante n'est sélectionnée
            // session()->flash('error', 'Veuillez sélectionner une imprimante.');
            return;
        }else{
                   // Exécutez la commande de numérisation
         $outputPath = 'scanned_documents/' . time() . '.pdf';
        //  $command = '"C:\Program Files\NAPS2\NAPS2.Console.exe" scan --driver wia --device "HP DJ 2300 series" --output "' . public_path($outputPath) . '"';
         $command = '"C:\Program Files\NAPS2\NAPS2.Console.exe" scan --driver wia --device "' . $this->selectedPrinter . '" --output "' . public_path($outputPath) . '"';
          exec($command, $output, $returnVar);

         // Vérifiez si le fichier a été correctement créé
         if (file_exists(public_path($outputPath))) {
             $this->filePath = $outputPath;
             $this->dispatch('fileScanned', ['filePath' => $outputPath]); // Émet l'événement avec le chemin du fichier
         } else {
             $this->dispatch('scanFailed'); // Émet un événement en cas d'échec
         }
         }


    }
    public function upload()
    {
        if ($this->filePath) {
            // Code pour enregistrer le chemin dans la base de données
            // $document = new Document();
            // $document->file_path = $this->filePath;
            // $document->save();

            session()->flash('message', 'Document uploaded and saved successfully.');
        }
    }

    public function render()
    {
        return view('livewire.scandocument');
    }
}
