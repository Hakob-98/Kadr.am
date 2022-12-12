<div>
    <a href="{{ url('/') }}">Kadr</a>
</div>
<div>
    <div>
        <form action="{{ '/change-email' }}" method="post">
            @csrf
            <h1>Մոռացե՞լ եք գաղտնաբառը</h1>
            <p class="errorText" style="color: red;">{{ $errors->first('email') }}</p>
            <p>Մուտքագրեք այն էլ. փոստի հասցեն, որը նշել եք գրանցման ժամանակ և մենք կուղարկենք Ձեզ նամակ` գաղտնաբառի վերականգնման համար անհրաժեշտ հրահանգը:</p>
            <input type="text" name="email" value="{{ old('email') }}" id="email" placeholder="Էլ. փոստ">
            <button>Ուղարկել</button>
        </form>
    </div>
    <div>
        <a href="{{ url('/login') }}">Վերադառնալ Մուտքի էջ</a>
    </div>
</div>