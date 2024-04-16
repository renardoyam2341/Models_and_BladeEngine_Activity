@include('layouts.header')

<main class="p-8">

    <div class="bg-blue-50 p-8 rounded-lg shadow-lg">

        <table class="w-full table-auto">

            <h1 class="text-3xl text-center py-4 font-semibold">Book List</h1>

            <thead>
                <tr class="bg-blue-700 text-white">
                    <th class="border px-4 py-2 font-bold">ISBN</th>
                    <th class="border px-4 py-2 font-bold">Book Title</th>
                    <th class="border px-4 py-2 font-bold">Author</th>
                    <th class="border px-4 py-2 font-bold">Description</th>
                    <th class="border px-4 py-2 font-bold">Date of Publication</th>
                </tr>
            </thead>

            <tbody>

                @foreach($books as $book)
                
                <tr>

                    <td class="border px-4 py-2">{{$book->isbn}}</td>
                    <td class="border px-4 py-2">{{$book->title}}</td>
                    <td class="border px-4 py-2">{{$book->author}}</td>
                    <td class="border px-4 py-2">{{$book->description}}</td>
                    <td class="border px-4 py-2">{{$book->date_published}}</td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>


</main>

@include('layouts.footer')