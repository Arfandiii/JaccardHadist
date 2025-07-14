@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6 space-y-10">
    <!-- TABEL 1: Hadist & QUERY -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">1. Data Hadist & Query</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-green-800 text-white divide-y divide-gray-600">
                    <tr>
                        <th class="border p-3 font-semibold text-center">No</th>
                        <th class="border p-3 font-semibold">Kitab</th>
                        <th class="border p-3 font-semibold">Perawi</th>
                        <th class="border p-3 font-semibold">No Hadist</th>
                        <th class="border p-3 font-semibold">Isi Hadist</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach($documentsHadist as $index => $doc)
                    <tr class="hover:bg-green-50 transition">
                        <td class="border p-3 text-center">{{ $index + 1 }}</td>
                        <td class="border p-3">{{ $doc['kitab'] }}</td>
                        <td class="border p-3 text-center">{{ $doc['perawi'] }}</td>
                        <td class="border p-3 text-center">{{ $doc['no_hadist'] }}</td>
                        <td class="border p-3 whitespace-pre-line">{{ $doc['isi_hadist'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200 mt-6">
                <thead class="bg-green-800 text-white divide-y divide-gray-600">
                    <tr>
                        <th class="border p-3 font-semibold text-center text-lg">Query</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-3 text-center text-2xl">{{ $query }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tabel 2: Hasil Preprocessing Hadist -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h1 class="text-2xl font-bold mb-4">2. Hasil Preprocessing Hadist</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th class="border p-3 font-semibold text-center">No</th>
                        <th class="border p-3 font-semibold text-center">Kitab</th>
                        <th class="border p-3 font-semibold text-center">Nomor Hadist</th>
                        <th class="border p-3 font-semibold">Isi</th>
                        <th class="border p-3 font-semibold">Case Folding</th>
                        <th class="border p-3 font-semibold">Tokenizing</th>
                        <th class="border p-3 font-semibold">Filtering</th>
                        <th class="border p-3 font-semibold">Stopword Removal</th>
                        <th class="border p-3 font-semibold">Stemming</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($documentsdetailed as $idx => $doc)
                    <tr class="hover:bg-green-50 transition">
                        <td class="border p-3 text-center">{{ $idx + 1 }}</td>
                        <td class="border p-3 text-center">{{ $doc['kitab'] }}</td>
                        <td class="border p-3 text-center">{{ $doc['no_hadist'] }}</td>
                        <td class="border p-3">{{ $doc['isi_hadist'] }}</td>
                        <td class="border p-3">{{ $doc['preprocessing']['case_folding'] }}
                        </td>
                        <td class="border p-3">| {{ implode(' | ', $doc['preprocessing']['tokenizing'])
                            }} |
                        </td>
                        <td class="border p-3">| {{ implode(' | ', $doc['preprocessing']['filtering']) }} |</td>
                        <td class="border p-3">| {{ implode(' | ', $doc['preprocessing']['stopword_removal']) }} |</td>
                        <td class="border p-3">| {{ implode(' | ', $doc['preprocessing']['stemming']) }} |</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tabel 3: Hasil Hasil Tokens -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">3. Tokens per Hadist</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-green-800 text-white divide-y divide-gray-600">
                    <tr>
                        <th class="border p-3 font-semibold text-center">No</th>
                        <th class="border p-3 font-semibold">Data</th>
                        <th class="border p-3 font-semibold">Tokens</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($documents as $index => $doc)
                    <tr class="hover:bg-green-50 transition">
                        <td class="border p-3 text-center">{{ $index + 1 }}</td>
                        <td class="border p-3">
                            Kitab: {{ $documentsHadist[$index]['kitab'] }} <br>
                            Perawi: {{ $documentsHadist[$index]['perawi'] }} <br>
                            No Hadist: {{ $documentsHadist[$index]['no_hadist'] }} <br>
                            Isi: {{ $documentsHadist[$index]['isi_hadist'] }}
                        </td>
                        <td class="border p-3">
                            {{ implode(', ', $doc['tokens']) }}
                        </td>
                    </tr>
                    @endforeach

                    <!-- Tambahan untuk Query -->
                    <tr class="hover:bg-green-50 transition bg-yellow-100 font-semibold">
                        <td class="border p-3 text-center">Q</td>
                        <td class="border p-3">Query: {{ $query }}</td>
                        <td class="border p-3">{{ implode(', ', $preprocessedQuery) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tabel 4: TF -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">4. Term Frequency (TF)</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Term</th>
                        @for ($i = 1; $i <= count($documents); $i++) <th class="border p-2 font-semibold text-center">
                            D{{ $i
                            }}
                            </th>
                            @endfor
                            <th class="border p-2 font-semibold text-center">Query</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($tfTable as $row)
                    <tr class="hover:bg-green-50 transition">
                        <td class="border p-2 text-center">{{ $row['term'] }}</td>
                        @for ($i = 1; $i <= count($documents); $i++) <td class="border p-2 text-center">{{ $row['D' .
                            $i] }}
                            </td>
                            @endfor
                            <td class="border p-2 text-center">{{ $row['Q'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tabel 5: TF Weight -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">5. Term Frequency Weight (TF Weight)</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Term</th>
                        @for ($i = 1; $i <= count($documents); $i++) <th class="border p-2 font-semibold text-center">
                            D{{ $i
                            }}
                            </th>
                            @endfor
                            <th class="border p-2 font-semibold text-center">Query</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($tfWeightTable as $row)
                    <tr class="hover:bg-green-50 transition">
                        <td class="border p-2 text-center">{{ $row['term'] }}</td>
                        @for ($i = 1; $i <= count($documents); $i++) <td class="border p-2 text-center">{{ $row['D' .
                            $i] }}
                            </td>
                            @endfor
                            <td class="border p-2 text-center">{{ $row['Q'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tabel 6 : DF & IDF -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">6. Document Frequency (DF) dan Inverse Document Frequency (IDF)</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Term</th>
                        <th class="border p-2 font-semibold text-center">DF</th>
                        <th class="border p-2 font-semibold text-center">IDF</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($idfTable as $row)
                    <tr class="hover:bg-green-50 transition">
                        <td class="border p-2 text-center">{{ $row['term'] }}</td>
                        <td class="border p-2 text-center">{{ $row['df'] }}</td>
                        <td class="border p-2 text-center">{{ $row['idf'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tabel 7: TF-IDF -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">7. TF-IDF</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Term</th>
                        @for ($i = 1; $i <= count($documents); $i++) <th class="border p-2 font-semibold text-center">
                            D{{ $i
                            }}
                            </th>
                            @endfor
                            <th class="border p-2 font-semibold text-center">Query</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($tfidfTable as $row)
                    <tr class="hover:bg-green-50 transition">
                        <td class="border p-2 text-center">{{ $row['term'] }}</td>
                        @for ($i = 1; $i <= count($documents); $i++) <td class="border p-2 text-center">{{ $row['D' .
                            $i] }}
                            </td>
                            @endfor
                            <td class="border p-2 text-center">{{ $row['Q'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tabel 8: Jaccard Similarity -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">8. Jaccard Similarity</h2>

        <!-- Penjelasan -->
        <div class="text-gray-700 text-sm mb-4 space-y-2">
            <p>
                <strong>Jaccard Similarity</strong> adalah ukuran kemiripan antara dua himpunan yang didefinisikan
                sebagai
                rasio antara jumlah elemen yang sama (intersection) terhadap jumlah total elemen unik (union).
            </p>
            <p>
                <strong>Rumus:</strong>
                <code class="bg-gray-100 px-2 py-1 rounded-md text-green-800 font-mono">
                Jaccard(A, B) = |A ∩ B| / |A ∪ B|
            </code>
            </p>
            <p>
                Dalam konteks ini, A adalah himpunan term dari <em>query</em> dan B adalah himpunan term dari
                <em>dokumen</em>. Term dianggap relevan jika nilai TF-IDF > 0.
            </p>
            <p>
                <strong>Contoh:</strong> Misalkan sebuah query memiliki term-term seperti:
                <code class="bg-gray-100 px-2 py-1 rounded-md">[amal, niat, rasulullah]</code><br>
                dan dokumen D1 memiliki term:
                <code class="bg-gray-100 px-2 py-1 rounded-md">[sungguh, amal, gantung, niat]</code><br>
                Maka:
                <br>
                <strong>Intersection</strong>: [amal, niat] = 2 term<br>
                <strong>Union</strong>: [sungguh, amal, gantung, niat, rasulullah] = 5 term<br>
                <strong>Jaccard Similarity</strong>: 2 / 5 = 0.4
            </p>
        </div>

        <!-- Tabel Hasil -->
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Dokumen</th>
                        <th class="border p-2 font-semibold text-center">Jaccard Similarity</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($jaccardScores as $doc => $score)
                    <tr class="hover:bg-green-50 transition">
                        <td class="border p-2 text-center">{{ $doc }}</td>
                        <td class="border p-2 text-center">{{ $score }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection