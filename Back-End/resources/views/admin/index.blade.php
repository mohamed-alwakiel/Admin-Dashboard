<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Campaigns') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-4 inline-block w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="w-full text-center">
                                <thead class="border-b bg-gray-800">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">

                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Signup
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Massage Therapy
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Chiropractic Care
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Yoga Exercise
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Other
                                        </th>
                                    </tr>
                                </thead class="border-b">
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Total
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $users }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            ( {{ $total_massage_Value }} ) Votes
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            ( {{ $total_care_Value }} ) Votes
                                        </td>

                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            ( {{ $total_yoga_Value }} ) Votes
                                        </td>

                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            ( {{ $total_other_Value }} ) Votes
                                        </td>
                                    </tr class="bg-white border-b">

                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">300x250
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $users300x250 }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Massage Therapy <br>({{ $users300x250_message }} emails)
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Chiropractic Care <br>({{ $users300x250_care }} emails)
                                        </td>

                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Yoga Exercise <br>({{ $users300x250_yoga }} emails)
                                        </td>

                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Other <br>({{ $users300x250_other }} emails)
                                        </td>
                                    </tr class="bg-white border-b">

                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">300x600
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $users300x600 }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                           Massage Therapy <br>({{ $users300x600_message }} emails)
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Chiropractic Care <br>({{ $users300x600_care }} emails)
                                        </td>

                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Yoga Exercise <br>({{ $users300x600_yoga }} emails)
                                        </td>

                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Other <br>({{ $users300x600_other }} emails)
                                        </td>
                                    </tr class="bg-white border-b">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
