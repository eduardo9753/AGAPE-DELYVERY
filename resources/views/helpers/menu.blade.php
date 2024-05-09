<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Nuestra Carta</h2>
                    <p>Ordena el plato que desees y compártelo en familia.</p>
                </div>
            </div>
        </div>

        <div class="row inner-menu-box">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach ($categoriesWithDishes as $category_id => $category)
                        <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="v-pills-{{ $category_id }}-tab"
                            data-toggle="pill" href="#v-pills-{{ $category_id }}" role="tab"
                            aria-controls="v-pills-{{ $category_id }}"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            @php
                                $categories = DB::connection('other_system')
                                    ->table('categories')
                                    ->select('categories.*')
                                    ->where('id', $category_id)
                                    ->get();
                            @endphp
                            @foreach ($categories as $category)
                                {{ $category->name }}
                            @endforeach
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    @foreach ($categoriesWithDishes as $category_id => $category)
                        <div class="tab-pane fade{{ $loop->first ? ' show active' : '' }}"
                            id="v-pills-{{ $category_id }}" role="tabpanel"
                            aria-labelledby="v-pills-{{ $category_id }}-tab">
                            <div class="row">
                                @foreach ($category as $dish)
                                    <div class="col-lg-4 col-md-6 special-grid {{ strtolower($dish->name) }}">
                                        <div class="gallery-single fix">
                                            <img src="{{ $dish->photo }}" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <h4>{{ $dish->name }}</h4>
                                                <p>{{ $dish->description }}</p>
                                                <h5>S/.{{ $dish->price }}</h5>
                                                <a href="https://wa.me/51946015906?text=Hola quiero pedir - Codigo:{{ $dish->id }} - {{ $dish->name }} - {{ $dish->description }}"
                                                    class="btn btn-success">Pedir</a>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
