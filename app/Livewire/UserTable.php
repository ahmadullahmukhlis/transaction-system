<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class UserTable extends PowerGridComponent
{
    use WithExport;
    public string $loadingComponent = 'components.loading';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return User::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable()->editOnClick(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable()->editOnClick(),

            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable()->editOnClick(),

            Column::action('Action'),
        ];
    }

    public function filters(): array
    {
        return [];
    }
    public function onUpdatedEditable(string|int $id, string $field, string $value): void
    {
        User::query()->find($id)->update([
            $field => $value,
        ]);
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->dispatch('user-edit', ['rowId' => $rowId]);
    }
    #[\Livewire\Attributes\On('delete')]
    public function delete($id)
    {
        $this->js('alert(' . $id . ')');
    }


    public function actions(User $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: ' . $row->id)
                ->id()
                ->class('btn btn-warning')
                ->dispatch('edit', ['rowId' => $row->id]),

            Button::add('delete')->slot('Delete: ' . $row->id)
                ->id()
                ->class('btn btn-danger')
                ->openModal('confirmation-modal', ['id' => 'id'])

        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
    public function update(array $data): bool
    {
        try {
            $updated = User::query()->find($data['id']);
            $updated->update([
                $data['field'] => $data['value']
            ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
