@extends('layouts.app')

@section('content')
<section class="sectionTwo">
    <h2>What's inside?</h2>
    <div class="boxai">
      <div class="lefts">
        <h3>RV Sites </h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fugit.
        </p>
      </div>
      <div class="middle">
        <h3>Lodging</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi consequatur rerum repellendus eum ad deserunt!</p>
      </div>
      <div class="rights">
        <h3>Tent Sites</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, sint accusamus! Totam ullam nulla exercitationem sapiente, aspernatur autem id inventore?
        </p>
      </div>
    </div>
  </section>
        <div class="section">
            <div class="left">
            @if ($campings->count() == 0)
            <p> No campings to display.</p>   
        @endif
        @foreach($campings as $camping)
        @if ($camping->list=='yes')   
        <div class="card">
            <div id="favourite_user" class="unfavourited"></div>
            <a  href="https://placeholder.com"><img id="image" src="https://via.placeholder.com/300x200/0000FF/808080"></a>
            <div class="name">{{ $camping->camping_name }}</div>
            <div class="loc">{{ $camping->city }} <span >&middot;</span> {{ $camping->country }} <span class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>      
            </span></div>
            
            <div class="rating">Very good {{ $camping->rating }} <span class="color"> /  10</span></div>
            <a href="#" class="myButton">More information</a>
            <a href="#" class="where">Where to book?</a>
        </div>
        @endif    
        @endforeach
        </div>
      
        <div class="right">
            @if ($campings->count() == 0)
            <p> No campings to display.</p>   
             @endif
            @foreach($campings->sortByDesc('rating') as $camping)
            @if ($camping->list=='yes')
            <div class="card">  
             <div class="card_left">
                <a  href="https://placeholder.com"><img id="image" src="https://via.placeholder.com/230x180/0000FF/808080"></a>
             </div>
             <div class="card_right">
                <div class="name">{{ $camping->camping_name }}</div>
                <div class="loc">{{ $camping->city }} <span >&middot;</span> {{ $camping->country }} <span class="stars">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>    
                </span></div>
                <div class="rating">Very good {{ $camping->rating }} <span class="color"> /  10</span></div>
                <div class="tags">
                @foreach ($camping->tags as $tag)
                 <a href="#" class="tag">{{ $tag->name }}</a>
                @endforeach
                </div>
            </div>
        </div>
        @endif    
        @endforeach

        </div>      
    </div>
    <div class="section1">
          
        {{ $campings->links() }}
        <p> Displaying {{$campings->count()}} of {{ $campings->total() }} camping(s).</p>
    </div>
     {{-- GALLERY section(infinite loop) --}}
     <div class="gallery"></div>
@endsection



    



