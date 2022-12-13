@extends('admin/admin_app')

@section('adminContent')
    <h1>Բոլոր օգտատերները</h1>
    <table border="2">
        <tr>
            <th>Category</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Work experience</th>
            <th>Gender</th>
            <th>Country</th>
            <th>City</th>
            <th>Active</th>
            <th>Created_at</th>
            <th>Update_at</th>
            <td>Նախազգուշացնել</td>
            <td>Արգելափակել</td>
            <td>Ջնջել</td>
        </tr>
        @foreach ($usersAll as $value)
            <tr>
                <td>{{ $value->category_user }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone_number }}</td>
                <td>{{ $value->work_experience }}</td>
                <td>{{ $value->gender }}</td>
                <td>{{ $value->country }}</td>
                <td>{{ $value->city }}</td>
                @if ($value->active==1)
                    <td style="color: green;">Active</td>
                @else
                    <td style="color: red;">Inactive</td>
                @endif
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td><button>Նախազգուշացնել</button></td>
                <td><button>Արգելափակել</button></td>
                <td><button>Ջնջել</button></td>
            </tr>
        @endforeach
    </table>
    <h1>Ջնջված օգտատերները</h1>
    {{-- <table border="2">
        <tr>
            <th>Category</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Work experience</th>
            <th>Gender</th>
            <th>Country</th>
            <th>City</th>
            <th>Active</th>
            <th>Created_at</th>
            <th>Update_at</th>
            <td>Նախազգուշացնել</td>
            <td>Արգելափակել</td>
            <td>Ջնջել</td>
        </tr>
        @foreach ($users as $value)
            <tr>
                <td>{{ $value->category_user }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone_number }}</td>
                <td>{{ $value->work_experience }}</td>
                <td>{{ $value->gender }}</td>
                <td>{{ $value->country }}</td>
                <td>{{ $value->city }}</td>
                @if ($value->active==1)
                    <td style="color: green;">Active</td>
                @else
                    <td style="color: red;">Inactive</td>
                @endif
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td><button>Նախազգուշացնել</button></td>
                <td><button>Արգելափակել</button></td>
                <td><button>Ջնջել</button></td>
            </tr>
        @endforeach
    </table> --}}

    <style>
        table{
            border: 1px solid black;
        }
        tr{
            border: 1px solid black;
        }
        th{
            border: 1px solid black;
        }
        td{
            border: 1px solid black;
        }
    </style>
@endsection