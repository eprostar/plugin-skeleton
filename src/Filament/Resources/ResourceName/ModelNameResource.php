<?php

namespace VendorName\Skeleton\Filament\Resources;

use Eprostar\EprostarHelper\Traits\HasTimestampColumns;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use VendorName\Skeleton\Filament\Resources\ResourceName\Pages\CreateResourceName;
use VendorName\Skeleton\Filament\Resources\ResourceName\Pages\EditResourceName;
use VendorName\Skeleton\Filament\Resources\ResourceName\Pages\ListResourceNames;
use VendorName\Skeleton\Filament\Resources\ResourceName\Pages\ViewResourceName;

// use App\Filament\Resources\ResourceName\RelationManagers;

class ModelNameResource extends Resource
{
    use HasTimestampColumns;

    protected static ?string $model = ResourceName::class;

    //    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'XXXX';

    protected static ?int $navigationSort = 2;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::End;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->heading(__('skeleton.form.sections.general.heading'))
                    ->description(__('skeleton.form.sections.general.description'))
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        static::getNameFormField(),
                        //,
                    ]),
            ]);
    }

    public static function getNameFormField(): TextInput
    {
        return TextInput::make('name')
            ->autofocus()
            ->label(__('skeleton.form.fields.name.label'))
            ->placeholder(__('skeleton.form.fields.name.placeholder'))
            ->helperText(__('skeleton.form.fields.name.helper_text'))
            ->required()
            ->string()
            ->maxLength(255);
    }

    public static function getModelLabel(): string
    {
        return __('skeleton.model_label');
    }

    public static function getNavigationLabel(): string
    {
        return __('skeleton.navigation_label');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListResourceNames::route('/'),
            'create' => CreateResourceName::route('/create'),
            'view' => ViewResourceName::route('/{record}'),
            'edit' => EditResourceName::route('/{record}/edit'),
        ];
    }

    public static function getPluralModelLabel(): string
    {
        return __('skeleton.plural_model_label');
    }

    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            ViewResourceName::class,
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                static::getNameEntry(),
            ]);
    }

    public static function getNameEntry(): TextEntry
    {
        return TextEntry::make('name')
            ->label(__('skeleton.form.entries.name.label'));
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                static::getNameColumn(),
                static::getCreatedAtColumn(),
                static::getUpdatedAtColumn(),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),

                    Tables\Actions\ActionGroup::make([
                        Tables\Actions\DeleteAction::make(),
                    ])->dropdown(false),

                    Tables\Actions\RestoreAction::make(),

                    Tables\Actions\ActionGroup::make([
                        Tables\Actions\ForceDeleteAction::make(),
                    ])->dropdown(false),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                ]),
            ])
            ->heading(__('skeleton.table.heading'))
            ->description(__('skeleton.table.description'))
            ->emptyStateHeading(function ($livewire) {
                return $livewire?->tableSearch
                    ? __('skeleton.table.empty_state.no_results.heading')
                    : __('skeleton.table.empty_state.heading');
            })
            ->emptyStateDescription(function ($livewire) {
                return $livewire?->tableSearch
                    ? __('skeleton.table.empty_state.no_results.description', ['term' => e($livewire->tableSearch)])
                    : __('skeleton.table.empty_state.description');
            })
            ->emptyStateActions([
                Tables\Actions\Action::make('create')
                    ->label(__('skeleton.table.empty_state.actions.create'))
                    ->icon('heroicon-s-plus')
                    ->outlined()
                    ->color('gray')
                    ->size(ActionSize::Small)
                    ->url(static::getUrl('create'))
                    ->button(),
            ]);
        //            ->emptyStateIcon(static::$navigationIcon)
    }

    public static function getNameColumn(): TextColumn
    {
        return TextColumn::make('name')
            ->label(__('skeleton.table.columns.name.label'))
            ->sortable()
            ->url(function ($record) {
                return static::getUrl('view', ['record' => $record]);
            })
            ->searchable();
    }
}
