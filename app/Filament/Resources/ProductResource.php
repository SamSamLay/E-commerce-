<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;

use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationLabel = 'Products';
    protected static ?string $pluralModelLabel = 'Products';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Product Name'),
            Forms\Components\Textarea::make('description')
                ->required()
                ->label('Description'),
            Forms\Components\TextInput::make('price')
                ->required()
                ->numeric()
                ->label('Price'),
            Forms\Components\Select::make('category_id')
                ->required()
                ->relationship('category','category_name')
                ->label('Category'),
            Forms\Components\Select::make('brand_id')
                ->required()
                ->relationship('brand','brand_name')
                ->label('Brand'),
            Forms\Components\Select::make('supplier_id')
                ->required()
                ->relationship('supplier','supplier_name')
                ->label('Supplier'),
            Forms\Components\FileUpload::make('image')
                ->image()
                ->nullable()
                ->label('Product Image'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('price')->sortable(),
            Tables\Columns\TextColumn::make('category.category_name')->label('Category')->sortable(),
            Tables\Columns\TextColumn::make('brand.brand_name')->sortable(),
            Tables\Columns\TextColumn::make('supplier.supplier_name')->sortable(),
        ])
        ->actions([
            // You may add these actions to your table if you're using a simple
            // resource, or you just want to be able to delete records without
            // leaving the table.
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
            Tables\Actions\ForceDeleteAction::make(),
            Tables\Actions\RestoreAction::make(),
            // ...
        ])
        ;
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\ProductResource\Pages\ListProducts::route('/'),
            'create' => \App\Filament\Resources\ProductResource\Pages\CreateProduct::route('/create'),
            'edit' => \App\Filament\Resources\ProductResource\Pages\EditProduct::route('/{record}/edit'),
        ];
    }
  

}