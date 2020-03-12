# NPS main theme plugin

## There are two ways to enable NPS Theme in sales channels across the shop:

### via console commands inside app docker container

To enable NPSInternational Theme via docker commands you need to:

- go into docker app container
```bash
docker-compose exec app bash
```
- refresh plugins list
```bash
bin/console plugin:refresh
```

- install and then activate the Theme Plugin
```bash
bin/console plugin:install --activate MainTheme
```

- assign the NPS theme to sales channels (--all flag will assign theme to all sales channels).
```bash
bin/console theme:change MainTheme --all
```

It might be necessary to rebuilt theme if storefront view is broken by:
```bash
bin/console theme:compile 
```

To assign theme to channels you can also use interactive mode:
```bash
bin/console theme:change MainTheme
```

### via Admin Panel

In Admin dashboard go to `Settings > System > Plugins`.
In My plugins box first install and then activate Main Theme and then assign theme to chosen sales channels:
- go to each channel > Theme tab
- change theme