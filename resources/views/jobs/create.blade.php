<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Engineer..." />
        <x-forms.input label="Salary" name="salary" placeholder="£60,000" />
        <x-forms.input label="Location" name="location" placeholder="Victoria, London" />

        <x-forms.select label="Schedule" name="schedule">
            <option class="text-black">Part Time</option>
            <option class="text-black">Full Time</option>
        </x-forms.select>

        <!--<x-forms.input label="URL" name="url" placeholder="https://example.com/jobs/" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />-->

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="London, Remote, Education" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
