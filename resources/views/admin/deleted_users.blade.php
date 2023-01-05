@extends('admin/admin_home')

@section('importUsers')
    <div class="heading">
        <h1>Ջնջված օգտատերներ</h1>
    </div>
    <div class="showUsers">
        <div class="individualUsers">
            <div>
                <h2>Անհատներ</h2>
            </div>
            <div class="usersBlock">
                @foreach ($users as $value)
                    @if ($value->category_user == 'individual' && $value->deleted == 1)
                        <div id="{{ $value->id }}" class="userBox">
                            <div class="image">
                                <img src="{{ asset('images/user/user-profile.png') }}" alt="User-profile">
                            </div>
                            <div class="name">
                                <p>{{ $value->first_name }}</p>
                            </div>
                            <div class="btnOpen">
                                <a href="#" class="openUser">Բացել</a>
                            </div>
                            <div class="btnRestore">
                                <button class="restoreUser">Ակտիվացնել</button>
                            </div>
                            <div class="btnDelete">
                                <button class="deletedUser">Ջնջել</button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="organizationUsers">
            <div>
                <h2>Կազմակերպություններ</h2>
            </div>
            <div class="usersBlock">
                @foreach ($users as $value)
                    @if ($value->category_user == 'organization' && $value->deleted == 1)
                        <div id="{{ $value->id }}" class="userBox">
                            <div class="image">
                                <img src="{{ asset('images/user/user-profile.png') }}" alt="User-profile">
                            </div>
                            <div class="name">
                                <p>{{ $value->first_name }}</p>
                            </div>
                            <div class="btnOpen">
                                <a href="#" class="openUser">Բացել</a>
                            </div>
                            <div class="btnRestore">
                                <button class="restoreUser">Ակտիվացնել</button>
                            </div>
                            <div class="btnDelete">
                                <button class="deletedUser">Ջնջել</button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection