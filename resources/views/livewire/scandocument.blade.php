
<!-- resources/views/livewire/scan-document.blade.php -->
<div>
    <!-- Sélection de l'imprimante -->
    <label for="printerSelect">Sélectionnez une imprimante :</label>
    <select id="printerSelect" wire:model="selectedPrinter">
        <option value="">-- Sélectionnez une imprimante --</option>
       <option value="HP LJ M178M181">HP LASETJET M180</option>
       <option value="HP DJ 2300 series">HP DESKJET 2300 series</option>
    </select>

    <button wire:click="scan">Scan Document</button>

    @if ($filePath)
    <!-- Afficher le fichier scanné -->
    <div>
        <iframe src="{{ asset($filePath) }}" width="600" height="800" frameborder="0"></iframe>
    </div>

    <!-- Formulaire d'upload -->
    <form wire:submit.prevent="upload">
        <input type="hidden" wire:model="filePath">
        <button type="submit">Upload and Save</button>
    </form>
@endif
</div>
@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('fileScanned', (event) => {
            const filePath = event.filePath;
            // Update the UI or handle the filePath
            console.log('File scanned:', filePath);
        });

        Livewire.on('scanFailed', () => {
            alert('Scanning failed, please try again.');
        });
        Livewire.on('scanNote', () => {
            alert('please select the scanner.');
        });
    });
</script>
@endpush
