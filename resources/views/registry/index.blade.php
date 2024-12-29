<!DOCTYPE html>
<html dir=rtl>

<head>
    <title>Aryana Hospital Index</title>
    <link rel="stylesheet" href="{{asset('Assets/bootstrap-5.2.3-dist/css/bootstrap.css')}}">
    <style>
        @font-face {
            font-family: 'aviny';
            src: url('{{ asset('Assets/fonts/aviny.ttf') }}');
        }

        body {
            background-image: url({{ asset('assets/css/database_background.jpg') }});
            background-size: 100%;
            color: white;
        }

        .container {
            padding: 50px;
            background-color: #00000095;
            border-radius: 2cm;
        }

        .table {
            color: white;
        }

        .searchbar {
            width: 160px;
            height: 30px;
            padding: 8px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            border: none;
            border-bottom: solid white;
            background-color: rgba(240, 248, 255, 0);
            color: white;
            font-size: 16px;
        }

        ::placeholder {
            color: white;
        }
    </style>
</head>

<body>
<form action="{{route('logout')}}" method="post" role="search">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" style="margin-right: 1600px; margin-top: 20px">  Logout  </button>
</form>

<div class="container my-5">
    <h2 align="center"> دیتابیس شفاخانه آریانا</h2><br>
    <a class="btn btn-primary" href="{{ route('register.create') }}" role="button">ثبت مریض جدید</a><br><br>

    @if(session('message'))
        <div class="alert alert-{{ session('msg_type') }}">
            {{ session('message') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <table class="table">
            <thead>
            <tr>
                <th>آی دی</th>
                <th>نام</th>
                <th>تخلص</th>
                <th>سن</th>
                <th>شماره تماس</th>
                <th>آدرس</th>
                <th>نوع مریضی</th>
                <th>تشخیص مریضی</th>
                <th>تاریخ ثبت نام</th>
                <th colspan="2">حذف و ویرایش</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr style="font-size:23px; font-family: aviny">
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->NAME }}</td>
                    <td>{{ $record->LASTNAME }}</td>
                    <td>{{ $record->AGE }}</td>
                    <td>{{ $record->PHONENUMBER }}</td>
                    <td>{{ $record->ADDRESS }}</td>
                    <td>{{ $record->DISEASE }}</td>
                    <td>{{ $record->DIAGNOSIS }}</td>
                    <td>{{ $record->ATTENDDATE }}</td>
                    <td>
                        <a href="{{ route('patients.edit', $record->id) }}" class='btn btn-primary btn-sm' style="font-family:sanserif">ویرایش</a>
                        <form action="{{ route('record.destroy', $record->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" style="font-family:sanserif">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>

</html>
