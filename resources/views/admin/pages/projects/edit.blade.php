@extends('admin.layout.app')

@section('title', 'Edit Project')

@section('content')

<div class="space-y-6">

    <!-- HEADER -->
    <div class="bg-white rounded-3xl shadow-sm border border-zinc-200 px-8 py-6">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-black">
                    Edit Project
                </h2>
                <p class="text-zinc-500 mt-1">
                    Update project information and media
                </p>
            </div>

            <a href="{{ route('projects.index') }}"
               class="px-5 py-3 rounded-2xl border border-zinc-300 hover:bg-zinc-50">
                Back
            </a>
        </div>
    </div>

    <!-- FORM -->
    <div class="bg-white rounded-3xl shadow-sm border border-zinc-200 p-8">

        <form action="{{ route('projects.update', $project) }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-8">

            @csrf
            @method('PUT')

            <!-- Basic Info -->
            <div class="grid grid-cols-2 gap-6">

                <div>
                    <label class="block text-sm font-semibold mb-3">Project Name</label>
                    <input type="text"
                           name="name"
                           value="{{ $project->name }}"
                           class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-3">Slug</label>
                    <input type="text"
                           name="slug"
                           value="{{ $project->slug }}"
                           class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
                </div>

            </div>

            <div>
                <label class="block text-sm font-semibold mb-3">Short Description</label>
                <textarea name="short_desc"
                          rows="3"
                          class="w-full rounded-2xl border border-zinc-300 px-5 py-4">{{ $project->short_desc }}</textarea>
            </div>

            <!-- Thumbnail -->
            <div>
                <label class="block text-sm font-semibold mb-3">Current Thumbnail</label>

                @if($project->thumbnail)
                    <img src="{{ asset('storage/' . $project->thumbnail) }}"
                         class="w-64 rounded-2xl border mb-4">
                @endif

                <input type="file"
                       name="thumbnail"
                       class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
            </div>

            <!-- Editor Fields -->
            <div>
                <label class="block text-sm font-semibold mb-3">Overview</label>
                <textarea id="overview"
                          name="overview">{{ $project->overview }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-3">Problem</label>
                <textarea id="problem"
                          name="problem">{{ $project->problem }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-3">Solution</label>
                <textarea id="solution"
                          name="solution">{{ $project->solution }}</textarea>
            </div>

            <button type="submit"
                    class="w-full bg-black text-white py-4 rounded-2xl font-semibold">
                Update Project
            </button>

        </form>

        <div class="mt-10 border-t pt-10">

            <h3 class="text-xl font-bold mb-2">
                Gallery Management
            </h3>

            <p class="text-zinc-500 mb-6">
                Upload, reorder and manage project gallery images
            </p>

            {{-- Existing Gallery --}}
            <div id="galleryGrid" class="grid grid-cols-4 gap-4 mb-8">
                @foreach($project->images->sortBy('sort_order') as $image)
                    <div class="gallery-item bg-white border rounded-2xl p-3 shadow-sm"
                        data-id="{{ $image->id }}">

                        <img src="{{ asset('storage/' . $image->image) }}"
                            class="w-full h-36 object-cover rounded-xl mb-3">

                        <div class="flex justify-between items-center">
                            <span class="text-xs text-zinc-500">
                                Order:
                                <span class="order-number">{{ $loop->iteration }}</span>
                            </span>

                            <button type="button"
                                    class="delete-image text-red-500 text-sm"
                                    data-id="{{ $image->id }}">
                                Delete
                            </button>
                        </div>

                    </div>
                @endforeach
            </div>

            {{-- Upload Form --}}
            <form action="{{ route('projects.gallery.store', $project) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <div id="dropZone"
                    class="border-2 border-dashed border-zinc-300 rounded-2xl p-10 text-center bg-zinc-50 cursor-pointer hover:bg-zinc-100 transition">

                    <p class="font-semibold text-zinc-700">
                        Drag & Drop Images Here
                    </p>

                    <p class="text-sm text-zinc-500 mt-2">
                        Click, Drag files, or Paste screenshots (Ctrl+V)
                    </p>

                    <input type="file"
                        id="galleryInput"
                        name="gallery[]"
                        multiple
                        class="hidden">
                </div>

                <div id="previewGrid" class="grid grid-cols-4 gap-4 mt-6"></div>

                <button type="submit"
                        class="mt-6 bg-black text-white px-6 py-3 rounded-2xl font-semibold">
                    Upload Gallery Images
                </button>

            </form>

        </div>

    </div>

</div>

@endsection

@section('scripts')

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<script>
    ClassicEditor.create(document.querySelector('#overview'));
    ClassicEditor.create(document.querySelector('#problem'));
    ClassicEditor.create(document.querySelector('#solution'));
</script>

<script>
    const dropZone = document.getElementById('dropZone');
const galleryInput = document.getElementById('galleryInput');
const previewGrid = document.getElementById('previewGrid');

let selectedFiles = [];

if (dropZone) {

    dropZone.addEventListener('click', () => galleryInput.click());

    galleryInput.addEventListener('change', function () {
        handleFiles(this.files);
    });

    dropZone.addEventListener('dragover', function(e) {
        e.preventDefault();
        dropZone.classList.add('border-black');
    });

    dropZone.addEventListener('dragleave', function() {
        dropZone.classList.remove('border-black');
    });

    dropZone.addEventListener('drop', function(e) {
        e.preventDefault();
        dropZone.classList.remove('border-black');
        handleFiles(e.dataTransfer.files);
    });

    document.addEventListener('paste', function(e) {
        const items = e.clipboardData.items;

        for (let item of items) {
            if (item.type.indexOf('image') !== -1) {
                handleFiles([item.getAsFile()]);
            }
        }
    });
}

function handleFiles(files) {
    for (let file of files) {
        selectedFiles.push(file);

        const reader = new FileReader();

        reader.onload = function(e) {
            previewGrid.innerHTML += `
                <div class="border rounded-2xl p-2 bg-white shadow-sm">
                    <img src="${e.target.result}" class="w-full h-32 object-cover rounded-xl">
                </div>
            `;
        };

        reader.readAsDataURL(file);
    }

    updateInputFiles();
}

function updateInputFiles() {
    const dt = new DataTransfer();

    selectedFiles.forEach(file => dt.items.add(file));

    galleryInput.files = dt.files;
}
</script>

<script>
const gallery = document.getElementById('galleryGrid');

if (gallery) {

    new Sortable(gallery, {
        animation: 200,

        onEnd: function () {
            let order = [];

            document.querySelectorAll('.gallery-item').forEach((item, index) => {
                item.querySelector('.order-number').innerText = index + 1;

                order.push({
                    id: item.dataset.id,
                    order: index + 1
                });
            });

            fetch('/admin/projects/gallery/reorder', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ order })
            })
            .then(res => res.json())
            .then(data => {
                showAlert('success', 'Gallery reordered successfully');
            })
            .catch(err => console.log(err));
        }
    });

    document.querySelectorAll('.delete-image').forEach(button => {
        button.addEventListener('click', function () {

            let id = this.dataset.id;
            let card = this.closest('.gallery-item');

            fetch('/admin/projects/gallery/' + id, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(res => res.json())
            .then(data => {
                card.remove();
                showAlert('success', 'Image deleted successfully');
            })
            .catch(err => console.log(err));
        });
    });
}
</script>

@endsection
