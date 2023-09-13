@extends('users/layout')

@section('content')

@auth

<div class="wrapper d-flex align-items-stretch">
  

     <!-- Page Content  -->
     <div id="content" class="p-4 p-md-5">


          <h2 class="mb-4">Додајте Админа</h2>


          <div class="card-body">
               <form method="POST" action="/dashboard/addAdmin">
               @csrf
                    <div class="form-row">
                         <div class="name">Име</div>
                         <div class="value">
                              <input class="input--style-6" type="text" name="name">
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">И-мејл</div>
                         <div class="value">
                              <div class="input-group">
                                   <input class="input--style-6" type="email" name="email"
                                        placeholder="example@email.com">
                              </div>
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">Лозинка</div>
                         <div class="value">
                              <div class="input-group">
                                   <input class="input--style-6" type="password" name="password">
                              </div>
                         </div>
                    </div>

                    <div class="card-footer">
                         <button class="btn btn--radius-2 btn--blue-2" type="submit">Потврди</button>
                    </div>

               </form>
          </div>
     </div>
</div>

@endauth

@endsection