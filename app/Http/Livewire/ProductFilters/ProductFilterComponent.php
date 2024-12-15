<?php

namespace App\Http\Livewire\ProductFilters;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ProductFilterComponent extends Component
{
    // Definir propiedades públicas para las categorías, marcas y etiquetas
    public $filtro_categorias;
    public $brands;
    public $tags;

    // Método mount() para obtener los datos al inicializar el componente
    public function mount()
    {
        // Obtener categorías con caché de 6 meses
        $this->filtro_categorias = Cache::remember('categories_id_name', now()->addMonths(6), function () {
            return Category::select('id', 'name')->get();
        });

        // Obtener marcas con caché de 6 meses
        $this->brands = Cache::remember('brands_id_title', now()->addMonths(6), function () {
            return Brand::select('id', 'title')->get();
        });

        // Obtener etiquetas con caché de 6 meses
        $this->tags = Cache::remember('tags_id_name', now()->addMonths(6), function () {
            return Tag::select('id', 'name')->get();
        });
    }

    // Método render para mostrar la vista del componente
    public function render()
    {
        return view('livewire.product-filters.product-filter-component');
    }
}
