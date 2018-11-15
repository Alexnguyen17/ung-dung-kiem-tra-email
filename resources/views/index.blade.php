<div class=",ain-content" xmlns="">
    <h1>Ung dung kiem tra email hop le</h1>
    <form method="get">
        <lable for="email-input">Email:</lable>
        <input id="email-input" type="email" placeholder="Nhap email can kiem tra" name="email"
               value="{{ request('email') }}">
        <input type="submit" value="check">
    </form>
    @if(!empty(request('email')))
        Ket qua: {{ $check?'Dung dinh dang Email':'Sai dinh dang Email' }}
    @endif
</div>