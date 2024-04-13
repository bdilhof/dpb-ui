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

##### Parameters

- `width` (integer, 100): Logo width
- `height` (integer, 100): Logo height

```html
<x-ui::logo />
```

### Layouts

#### App

This is basic layout for most of the pages.

##### Parameters

- `title` Page title. Will be used in page header and head title

```html
<x-ui::layout.app title="Dashboard">
  <!-- Page content -->
</x-ui::layout.app>
```

### Form

#### Input

```html
<x-ui::forms.input
  label="Meno"
  id="firstname"
  name="firstname"
/>
```
#### Select

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

```html
  <x-ui::forms.select2
      label="Label"
      id="id"
      name="name"
      :options="$tickets->toHtmlSelect('id', 'title')"
      :value="5"
  />
```

#### Checkbox

```html

```

#### File Upload

```html
  <x-ui::forms.file-upload
      name="test"
      id="test"
      helpText="You can upload: PNG, BMP, JPG. Maximum uploaded file size is 2MB"
      label="Fotografia"
  />
```

### Tables

#### DataTable

##### Parameters

- `items` (Collection, null): Table items
- `columns` (Array, []): List of columns which will be rendered in table

```html
<x-ui::tables.data-table :items="$items" :columns="['col1', 'col2', 'col3']" />
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

##### Parameters

- `display` (Boolean, true): Condition based on which will be component rendered
- `icon` (string, ''): Name of Font Awesome icon
- `link` (string, ''): Button link
- `text` (string, ''): Button text
- `outline` (Boolean, false): Outlined button
- `color` (String, 'primary'): Button color. Can be primary, secondary, danger, alert, success

```html
<x-ui::buttons.button />
```
