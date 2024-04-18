# DPB UI

## Installation

1. Install package

```bash
composer require dpb/ui
```

2. Put `UiServiceProvider` into your project **config/app.php**

```php
/*
 * Package Service Providers...
 */

\Dpb\Ui\UiServiceProvider::class,
```

3. Publish config

```bash
php artisan vendor:publish --tag=ui-config
```

4. Use components

```html
<x-ui:component-name parameters />
```

## Components

### General

#### Logo

This components render DPB logo

- `width` (integer, 100): Logo width
- `height` (integer, 100): Logo height
- `color` (string, "#ed1c24"): Logo color (use wisely)

```html
<x-ui::logo />
```

#### Delete Link

This component renders delete button which will display confirmation in modal window.

- `url` (string, ""): URL for delete action

```html
<x-ui::delete-link url="" />
```

### Layouts

#### App

This is basic layout for most of the pages.

- `title` Page title. Will be used in page header and head title

```html
<x-ui::layout.app title="Dashboard">
  <!-- Page content -->
</x-ui::layout.app>
```

### Forms

#### Form

Render the form element. It contains already CSRF protection.

- `action` (Mixed, ""): Target of the HTML form
- `method` (String, "POST"): Method of the form. Can be GET, POST, PUT, PATCH or DELETE

```html
<x-ui::forms.form :action="route('tickets.update', $ticket->id)" method="PATCH">
  <!-- Form fields -->
</x-ui::forms.form>
```

#### Input

- `label` (String, ""): Label for checkbox
- `name` (String, ""): Name of the checkbox
- `id` (String, ""): Element ID
- `value` (String, ""): Default value of the input element

```html
<x-ui::forms.input
  label="Meno"
  id="firstname"
  name="firstname"
/>
```
#### Select

- `name` (String, ""): Name of the element
- `items` (Collection, []): Collection with options for select
- `label` (String, ""): Label for element
- `value` (String, ""): Selected option
- `id` (String, ""): Element ID

```html
<x-ui::forms.select
  label="Label"
  id="id"
  name="name"
  :items="$tickets->toHtmlSelect('id', 'title')"
  :value="5"
/>
```

#### Select2

- `label` (String, ""): Label for element
- `id` (String, ""): Element ID
- `name` (String, ""): Name of the element
- `options` (Collection, []): Collection with options for select
- `value` (String, ""): Selected option

```html
<x-ui::forms.select2
  label="Label"
  id="id"
  name="name"
  :options="$tickets->toHtmlSelect('id', 'title')"
  :value="5"
/>
```

#### Textarea

- `name` (String, ""): Name of the element
- `label` (String, ""): Label for element
- `id` (String, ""): Element ID
- `value` (String, ""): Default value of the element

```html
<x-ui::forms.textarea
  label="Place your label"
  id="bodytext"
  name="bodytext"
  value="Lorem ipsum dolor sit amet..."
/>
```

#### Checkbox

- `label` (String, ""): Label for checkbox
- `name` (String, ""): Name of the checkbox
- `id` (String, ""): Element ID
- `checked` (Boolean, false): Define if the checkbox has to be checked
- `default` (String, ""): Default value which will be sent if checkbox is unchecked

```html
<x-ui::forms.checkbox
  name="checkbox"
  id="checkbox"
  label="Place your label"
  value="yes"
  default="no"
/>
```

#### File Upload

- `label` (String, ""): Label for checkbox
- `name` (String, ""): Name of the checkbox
- `id` (String, ""): Element ID
- `helpText` (String, ""): Help text for the file-upload

```html
<x-ui::forms.file-upload
  name="test"
  id="test"
  helpText="You can upload: PNG, BMP, JPG. Maximum uploaded file size is 2MB"
  label="Fotografia"
/>
```

### Tables

#### Table

```html
<x-ui::tables.table>
    <x-slot name="thead">
        <tr>
            <th>col</th>
            <th>col</th>
        </tr>
    </x-slot>
    <x-slot name="tbody">
        <tr>
            <td>col</td>
            <td>col</td>
        </tr>
    </x-slot>
</x-ui::tables.table>
```

#### DataTable

- `items` (Collection, null): Table items
- `columns` (Array, []): List of columns which will be rendered in table

```html
<x-ui::tables.data-table
  :items="$items"
  :columns="['col1', 'col2', 'col3']"
/>
```

### Buttons

#### Submit

```html
<x-ui::buttons.submit
  id="submit"
  text="Save"
/>
```

#### Button

- `display` (Boolean, true): Condition based on which will be component rendered
- `icon` (string, ''): Name of Font Awesome icon
- `link` (string, ''): Button link
- `text` (string, ''): Button text
- `outline` (Boolean, false): Outlined button
- `color` (String, 'primary'): Button color. Can be primary, secondary, danger, alert, success

```html
<x-ui::buttons.button />
```
