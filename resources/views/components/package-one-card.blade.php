@props(['package'])

<div class="col-lg-4">
    <div class="trainer-item">
        <div class="image-thumb">
            <img src="{{asset('images/product-1-720x480.jpg')}}" alt="">
        </div>
        <div class="down-content">
            <span>
                <sup>$</sup>300.00 - <sup>$</sup>400.00
            </span>

            <h4>{{$package->naslov}}</h4>

            <p>
                <i class="fa fa-calendar"></i> {{$package->godDoba}} &nbsp;&nbsp;&nbsp;

                <i class="fa fa-cube"></i> {{$package->polazak}} &nbsp;&nbsp;&nbsp;

                <i class="fa fa-plane"></i> {{$package->prevoz}} &nbsp;&nbsp;&nbsp;
            </p>

            <ul class="social-icons">
                <li><a href="ponuda/{{$package->id}}">+ Vidi ponudu</a></li>
            </ul>
        </div>
</div>
</div>