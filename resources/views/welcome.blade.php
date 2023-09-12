@foreach ($categories as $categorie)
<option value="{{ $categorie->id }} ">{{ $categorie->name }}</option>
@endforeach





    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
    <div>
        <h3>image</h3>
        @foreach ($products as $product)
        <div class="product">
            <h2>{{ $product->name }}</h2>
            <p>Prix : {{ $product->prix }}</p>
            <p>Description : {{ $product->description }}</p>
            <p>Nos points de vente : {{ $product->Nos_points_de_vente }}</p>
            <p>Catégorie : {{ $product->category->name }}</p>
            <img src="{{ asset('images/' . $product->photo) }}" class="card-img-top" alt="">

        </div>



        @endforeach















        <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
            <div>
               <h3>image</h3>
               @foreach ($products as $product)
               <div class="product">
                   <h2>{{ $product->name }}</h2>
                   <p>Prix : {{ $product->prix }}</p>
                   <p>Description : {{ $product->description }}</p>
                   <p>Nos points de vente : {{ $product->Nos_points_de_vente }}</p>
                   <p>Catégorie : {{ $product->category->name }}</p>
                   <img src="{{ asset('images/' . $product->photo) }}" class="card-img-top" alt="">

               </div>


               @endforeach
       </div>
   </div>
