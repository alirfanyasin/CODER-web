@extends('layouts.app')

@section('title', 'CODER - News')

@section('content')
  <section>
    <div class="container mb-5">
      <div class="row">
        <div class="col text-white p-4"
          style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
          <div class="mb-3">
            <a href="{{ route('admin.news.edit') }}">Edit</a>
            <a href="{{ route('admin.news.destroy') }}">Delete</a>
          </div>
          <div class="rounded-3 overflow-hidden" style="height: 500px">
            <img src="{{ asset('assets/img/photo-profile.jpg') }}" alt="" width="100%">
          </div>
          <div class="mt-5">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quia esse officiis!</h1>
            <div class="d-inline-block px-4 pt-3 mt-3"
              style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(2px);">
              <p>19 November 2023</p>
            </div>
            <div class="d-inline-block px-4 pt-3"
              style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(2px);">
              <p>Web Developer</p>
            </div>
            <p class="fw-light mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, eligendi expedita at
              esse
              voluptate
              voluptatem placeat ratione soluta dolor! Ipsa?</p>
            <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsam ducimus voluptatibus
              obcaecati,
              asperiores aliquam sunt recusandae quod autem sint, cumque nostrum illo unde similique laudantium
              consequatur? Possimus tempora dignissimos nobis laborum repudiandae itaque quam beatae cumque incidunt magni
              dicta, harum fugiat eveniet id temporibus repellat reiciendis, quis quidem? Voluptatum!</p>
            <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi mollitia voluptatum
              placeat amet?
              Dolorum aut facere voluptatum quidem deleniti praesentium ipsa, deserunt repudiandae ab ut assumenda
              provident ea eum explicabo.</p>
            <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dolorum sapiente
              doloribus, quis
              praesentium deserunt provident cumque quibusdam ducimus quod amet nesciunt in nihil consequuntur eligendi
              saepe repellendus ut deleniti itaque, atque alias. Laborum in fuga modi eveniet, quam dicta, repellendus
              autem itaque beatae hic iste ea atque quae debitis voluptates neque tempora, tenetur nihil unde magni
              consectetur? Suscipit, sit!</p>
            <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dicta, deleniti, delectus
              reprehenderit cum
              magni eum temporibus cupiditate nemo nulla aperiam suscipit recusandae? Similique eveniet, ad illo aut
              corrupti mollitia architecto laboriosam adipisci molestias. Doloribus labore sapiente delectus eos quis ipsa
              soluta magni? Quo aspernatur amet voluptate ullam enim? Blanditiis amet sapiente in! Consequuntur est
              voluptatem porro quo fuga ipsa impedit obcaecati cupiditate commodi nobis possimus sequi voluptate dolor
              odio non, aspernatur dolorum sapiente perspiciatis quia eaque fugiat rem. Tenetur a quo consequuntur
              pariatur sint animi ratione eveniet aspernatur id ipsa eos neque aperiam libero, earum fugit voluptatibus,
              rem necessitatibus!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
