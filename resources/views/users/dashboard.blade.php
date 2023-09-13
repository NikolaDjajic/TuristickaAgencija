@extends('users/layout')

@section('content')

@auth

                         <form method="POST" action="/logout">
                              @csrf
                              <button
                                   style="padding-top: 11px; background-color: transparent; border-color: transparent; color: rgb(218, 218, 218)"
                                   type="submit">
                                   <p>Одјави се</p>
                              </button>
                         </form>
          
     <!-- Page Content  -->
     <div id="content" class="p-4 p-md-5">


          <h2 class="mb-4">Админ Панел</h2>


          <div class="card-body">
               <form method="POST" action="/dashboard">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                         <div class="name">Име</div>
                         <div class="value">
                              <input class="input--style-6" type="text" name="name" value="{{auth()->user()->name}}">
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">И-мејл</div>
                         <div class="value">
                              <div class="input-group">
                                   <input class="input--style-6" type="email" name="email"
                                        value="{{auth()->user()->email}}">
                              </div>
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">Нова Лозинка</div>
                         <div class="value">
                              <div class="input-group">
                                   <input class="input--style-6" type="password" name="password">
                              </div>
                         </div>
                    </div>

                    <div class="card-footer">
                         <button class="btn btn--radius-2 btn--blue-2" type="submit">Сачувај</button>
                    </div>

               </form>
          </div>



     </div>
</div>

@endauth

@endsection