@extends('index')
    @section('content')
    <div class="container text-white mx-auto font-sans">

    <table class="table-fixed text-center">

        <thead class="bg-gray-700 sticky top-20 my-5">

            <tr class="">

                <th>Nombre</th>
                <th>Puerto</th>
                <th>Localidad</th>
                <th>Direccion</th>
                <th>Diesel A</th>
                <th>Diesel B</th>
                <th>Diesel uso maritimo</th>
                <th>Gasolina 95 e5</th>
                <th>Horario</th>
                <th>                    
                    <div class="content-center w-auto mx-auto mr-4">
                        <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-1 px-1 rounded mx-auto">
                            <a href="/createPole" class="md:flex">Crear<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                                                        </svg>
                            </a>
                        </button>
                    </div>
                </th>

            </tr> 

        </thead>

        <tbody class="bg-gray-500/95 divide-y divide-orange-400/75">

            @foreach($data as $register)

                <tr id="{{$register['id']}}">

                    <td>{{$register['rotulo']}}</td>
                    <td>{{$register['port']}}</td>
                    <td>{{$register['locality']}}</td>
                    <td>{{$register['address']}}</td>
                    <td>{{$register['diesel_oil_a']}}</td>
                    <td>{{$register['diesel_oil_b']}}</td>
                    <td>{{$register['maritime_diesel']}}</td>
                    <td>{{$register['gas_95_e5']}}</td>
                    <td>{{$register['working_hours']}}</td>
                    <td class="md:flex space-x-2 ml-2">
                        <a href="/editPole/{{$register['id']}}" class="text-blue-700"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>

                        </a>
 
                        <form action="/destroyPole/{{$register['id']}}" method="get">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-700" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg"fill="none"viewBox="0 0 24 24"stroke-width="1.5" stroke="currentColor"class=" mt-0 h-6 w-6"x-tooltip="tooltip">
                                    <path stroke-linecap="round"stroke-linejoin="round"d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                </svg>
                            </button>
                        </form>
                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>





    </div>
    @endsection
        