@extends('admin.layout.app')

@section('title', 'Projects')

@section('content')

@can('show projects')

<div class="bg-white rounded-3xl shadow-sm border border-zinc-200 overflow-hidden">

    <!-- HEADER -->
    <div class="flex items-center justify-between px-8 py-6 border-b border-zinc-200">

        <div>
            <h2 class="text-2xl font-bold text-black">
                Projects Management
            </h2>

            <p class="text-sm text-zinc-500 mt-1">
                Manage all application projects
            </p>
        </div>

        @can('create project')
        <button onclick="openCreateModal()"
                class="bg-black text-white px-5 py-3 rounded-2xl font-medium hover:opacity-90 transition">

            + Add Project

        </button>
        @endcan

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table id="aTable" class="w-full">

            <thead class="bg-zinc-50 border-b border-zinc-200">
                <tr>

                    <th class="text-left px-8 py-4 text-sm font-semibold text-zinc-600">
                        ID
                    </th>

                    <th class="text-left px-8 py-4 text-sm font-semibold text-zinc-600">
                        Project
                    </th>

                    <th class="text-left px-8 py-4 text-sm font-semibold text-zinc-600">
                        Category
                    </th>

                    <th class="text-left px-8 py-4 text-sm font-semibold text-zinc-600">
                        Featured
                    </th>

                    <th class="text-left px-8 py-4 text-sm font-semibold text-zinc-600">
                        Status
                    </th>

                    <th class="text-left px-8 py-4 text-sm font-semibold text-zinc-600">
                        Thumbnail
                    </th>

                    <th class="text-right px-8 py-4 text-sm font-semibold text-zinc-600">
                        Actions
                    </th>

                </tr>
            </thead>

            <tbody class="divide-y divide-zinc-100">

                @forelse ($projects as $project)

                <tr class="hover:bg-zinc-50 transition">

                    <!-- ID -->
                    <td class="px-8 py-5 font-medium text-zinc-700">
                        #{{ $project->id }}
                    </td>

                    <!-- PROJECT -->
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-4">

                            <div class="w-11 h-11 rounded-2xl bg-black text-white flex items-center justify-center font-bold">
                                {{ strtoupper(substr($project->name, 0, 1)) }}
                            </div>

                            <div>
                                <p class="font-semibold text-black">
                                    {{ $project->name }}
                                </p>

                                <p class="text-sm text-zinc-500">
                                    {{ $project->short_desc }}
                                </p>
                            </div>

                        </div>
                    </td>

                    <!-- CATEGORY -->
                    <td class="px-8 py-5 text-zinc-700">
                        {{ $project->category ?? '-' }}
                    </td>

                    <!-- FEATURED -->
                    <td class="px-8 py-5">
                        @if($project->featured)
                            <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                                Yes
                            </span>
                        @else
                            <span class="px-3 py-1 rounded-full bg-zinc-100 text-zinc-600 text-xs font-semibold">
                                No
                            </span>
                        @endif
                    </td>

                    <!-- STATUS -->
                    <td class="px-8 py-5">
                        @if($project->status)
                            <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold">
                                Active
                            </span>
                        @else
                            <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs font-semibold">
                                Inactive
                            </span>
                        @endif
                    </td>

                    <!-- THUMBNAIL -->
                    <td class="px-8 py-5">
                        @if($project->thumbnail)
                            <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                class="w-16 h-12 object-cover rounded-xl border">
                        @else
                            <span class="text-zinc-400 text-sm">No Image</span>
                        @endif
                    </td>

                    <!-- ACTIONS -->
                    <td class="px-8 py-5">
                        <div class="flex justify-end gap-3">

                            @can('edit project')
                            <a href="{{ route('projects.edit', $project) }}"
                                    class="px-4 py-2 rounded-xl bg-black text-white text-sm font-medium hover:opacity-90 transition">
                                Edit
                            </a>
                            @endcan

                            @can('delete project')
                            <form action="{{ route('projects.destroy', $project) }}"
                                method="POST"
                                onsubmit="return confirm('Delete this project?')">
                                @csrf
                                @method('DELETE')

                                <button class="px-4 py-2 rounded-xl border border-red-200 text-red-600 text-sm font-medium hover:bg-red-50 transition">
                                    Delete
                                </button>
                            </form>
                            @endcan

                        </div>
                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center py-16">

                        <div class="flex flex-col items-center">

                            <div class="w-16 h-16 rounded-full bg-zinc-100 flex items-center justify-center mb-4">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-8 h-8 text-zinc-400"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>

                                </svg>

                            </div>

                            <h3 class="text-lg font-semibold text-black">
                                No projects found
                            </h3>

                            <p class="text-zinc-500 text-sm mt-1">
                                Start by creating your first project
                            </p>

                        </div>

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endcan


{{-- CREATE MODAL --}}
@can('create project')
<div id="createModal"
     class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-5">

    <div class="bg-white rounded-3xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-hidden flex flex-col">

        <!-- Header -->
        <div class="flex items-center justify-between px-8 py-6 border-b border-zinc-200">

            <div>
                <h3 class="text-xl font-bold">
                    Create Project
                </h3>

                <p class="text-sm text-zinc-500 mt-1">
                    Add a new project to the system
                </p>
            </div>

            <button onclick="closeCreateModal()"
                    class="w-10 h-10 rounded-xl hover:bg-zinc-100 transition">

                ✕

            </button>

        </div>

        <!-- Body -->
        <div class="p-8 overflow-y-auto">

            @include('admin.pages.projects.create')

        </div>

    </div>

</div>
@endcan


{{-- EDIT MODAL --}}
{{-- @can('edit project')
<div id="editModal"
     class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-5">

    <div class="bg-white rounded-3xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-hidden flex flex-col">

        <!-- Header -->
        <div class="flex items-center justify-between px-8 py-6 border-b border-zinc-200">

            <div>
                <h3 class="text-xl font-bold">
                    Edit Project
                </h3>

                <p class="text-sm text-zinc-500 mt-1">
                    Update project information
                </p>
            </div>

            <button onclick="closeEditModal()"
                    class="w-10 h-10 rounded-xl hover:bg-zinc-100 transition">

                ✕

            </button>

        </div>

        <!-- Body -->
        <div class="p-8 overflow-y-auto" id="editModalContent">

        </div>

    </div>

</div>
@endcan --}}


<script>

    // =========================
    // CREATE MODAL
    // =========================

    const createModal = document.getElementById('createModal');

    function openCreateModal() {
        createModal.classList.remove('hidden');
        createModal.classList.add('flex');
    }

    function closeCreateModal() {
        createModal.classList.add('hidden');
        createModal.classList.remove('flex');
    }

    createModal.addEventListener('click', function (e) {

        if (e.target === createModal) {
            closeCreateModal();
        }

    });


    // =========================
    // EDIT MODAL
    // =========================

    // const editModal = document.getElementById('editModal');

    // function openEditModal(id) {

    //     editModal.classList.remove('hidden');
    //     editModal.classList.add('flex');

    //     fetch('/admin/projects/' + id + '/edit')
    //         .then(res => res.text())
    //         .then(data => {
    //             document.getElementById('editModalContent').innerHTML = data;
    //         });
    // }

    // function closeEditModal() {
    //     editModal.classList.add('hidden');
    //     editModal.classList.remove('flex');
    // }

    // editModal.addEventListener('click', function (e) {

    //     if (e.target === editModal) {
    //         closeEditModal();
    //     }

    // });


    // =========================
    // ESC KEY CLOSE
    // =========================

    document.addEventListener('keydown', function (e) {

        if (e.key === 'Escape') {

            closeCreateModal();
            closeEditModal();

        }

    });

</script>

@endsection
