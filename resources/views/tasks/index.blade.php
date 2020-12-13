<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($tasks as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $item->description }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{route('tasks.show', $item->id)}}" class="text-blue-600 hover:text-indigo-900">Show</a>
                                            <a href="{{route('tasks.edit', $item->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <form class="inline-block" action="{{route('tasks.destroy', $item->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="text-red-600 hover:text-indigo-900" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                <!-- More rows... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                ALTRA ROBA SOTTO
            </div>
        </div>
    </div>
</x-app-layout>
