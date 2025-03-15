<x-layout>
    <x-page-heading>Create Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label='Title' name='title' placeholder="CEO"/>
        <x-forms.input label='Salary' name='salary' placeholder="$90,000 USD"/>
        <x-forms.input label='Location' name='location' placeholder="Kathmandu,Nepal"/> 
        <x-forms.select label='Schedule' name='schedule'>
            <option class="bg-black" value="Full Time">Full Time</option>
            <option class="bg-black" value="Part Time">Part Time</option>
        </x-forms.select>


        <x-forms.input label='URL' name='url' placeholder="https://company/career/jobs/CEO"/> 
        <x-forms.checkbox label='Featured (Costs extra)' name='featured'/>

        <x-forms.divider />




        <x-forms.input label='Tags (Comma Separated)' name='tags' palaceholder='Web, Frontend, Backend'/>

        <x-forms.button>Create Job</x-forms.button>


    </x-forms.form>
</x-layout>