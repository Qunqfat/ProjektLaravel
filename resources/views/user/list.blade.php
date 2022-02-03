@extends('layout.main')

@section('content')
    <h2>Users list</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nick</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="3">For Each</td>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>
                            <a href="{{
                                route('get.user.show', [
                                    'userId' => $user['id']
                                    ])

                                }}"
                            >Szczegóły</a>
                        </td>
                    </tr>
                @endforeach

                <td colspan="3">FOR</td>
                @for ($i = 0; $i < count($users); $i++)
                    <tr>
                        <td>{{ $users[$i]['id'] }}</td>
                        <td>{{ $users[$i]['name'] }}</td>
                        <td>
                            <a href="{{
                                route('get.user.show', [
                                    'userId' => $users[$i]['id']
                                    ])
                                }}"
                            >Szczegóły</a>
                        </td>
                    </tr>
                @endfor

                <td colspan="3">For Else</td>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>
                            <a href="{{
                                route('get.user.show', [
                                    'userId' => $user['id']
                                    ])

                                }}"
                            >Szczegóły</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Lista jest pusta</td>
                    </tr>
                @endforelse


                <td colspan="3">While</td>
                    @php
                        $j = 0;
                    @endphp
                @while ($j < count($users))
                <tr>
                    <td>{{ $users[$j]['id'] }}</td>
                    <td>{{ $users[$j]['name'] }}</td>
                    <td>
                        <a href="{{
                            route('get.user.show', [
                                'userId' => $users[$j]['id']
                                ])
                            }}"
                        >Szczegóły</a>
                    </td>
                </tr>
                    @php
                        $j++;
                    @endphp
                @endwhile
            </tr>
        </tbody>
    </table>
@endsection
