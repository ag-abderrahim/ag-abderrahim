<form action="{{ route('projects.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="space-y-6">

    @csrf

    <!-- NAME -->
    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Project Name</label>
        <input type="text" name="name" required
               class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
    </div>

    <!-- SLUG -->
    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Slug</label>
        <input type="text" name="slug" required
               placeholder="example: agripages"
               class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
    </div>

    <!-- CATEGORY -->
    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Category</label>
        <select name="category"
                class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
            <option value="SaaS">SaaS</option>
            <option value="Marketplace">Marketplace</option>
            <option value="Healthcare">Healthcare</option>
            <option value="Business System">Business System</option>
        </select>
    </div>

    <!-- SHORT DESC -->
    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Short Description</label>
        <textarea name="short_desc" rows="3"
                  class="w-full rounded-2xl border border-zinc-300 px-5 py-4"></textarea>
    </div>

    <!-- OVERVIEW -->
    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Overview</label>
        <textarea name="overview" rows="5"
                  class="w-full rounded-2xl border border-zinc-300 px-5 py-4"></textarea>
    </div>

    <!-- PROBLEM -->
    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Problem</label>
        <textarea name="problem" rows="5"
                  class="w-full rounded-2xl border border-zinc-300 px-5 py-4"></textarea>
    </div>

    <!-- SOLUTION -->
    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Solution</label>
        <textarea name="solution" rows="5"
                  class="w-full rounded-2xl border border-zinc-300 px-5 py-4"></textarea>
    </div>

    <!-- LINKS -->
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-semibold text-zinc-700 mb-3">Live URL</label>
            <input type="text" name="live_url"
                   class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
        </div>

        <div>
            <label class="block text-sm font-semibold text-zinc-700 mb-3">GitHub URL</label>
            <input type="text" name="github_url"
                   class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
        </div>
    </div>

    <!-- TOOLS -->
    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Tools (comma separated)</label>
        <input type="text" name="tools"
               placeholder="Laravel, MySQL, Bootstrap"
               class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
    </div>

    <!-- IMAGES -->
    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Thumbnail</label>
        <input type="file" name="thumbnail"
               class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
    </div>

    <div>
        <label class="block text-sm font-semibold text-zinc-700 mb-3">Gallery Images</label>
        <input type="file" name="gallery[]" multiple
               class="w-full rounded-2xl border border-zinc-300 px-5 py-4">
    </div>

    <!-- STATUS -->
    <div class="flex gap-6">
        <label>
            <input type="checkbox" name="featured" value="1">
            Featured
        </label>

        <label>
            <input type="checkbox" name="status" value="1" checked>
            Active
        </label>
    </div>

    <button type="submit"
            class="w-full bg-black text-white py-4 rounded-2xl font-semibold">
        Save Project
    </button>

</form>
