# WebStack-Laravel

一个开源的网址导航网站项目，具备完整的前后台，您可以拿来制作自己的网址导航。

![首页](public\screen\01.JPG)



## 部署

克隆代码：

```shell
git clone https://github.com/hui-ho/WebStack-Laravel.git
```

安装依赖：

```shell
composer install
php artisan key:generate  
```

编辑配置：

```
cp .env.example .env
```

```
...
DB_DATABASE=database
DB_USERNAME=username
DB_PASSWORD=password
...
```

迁移数据：

```shell
php artisan migrate:refresh --seed
```

开启服务：

```shell
php artisan serve
```

安装完成：http://127.0.0.1:8000



## 使用

后台地址：http://domain/admin

默认用户：admin

默认密码：admin

![分类](public\screen\02.JPG)

![网站](public\screen\03.JPG)



## 感谢

前端设计：[**WebStackPage**](https://github.com/WebStackPage/WebStackPage.github.io)

后台框架：[**laravel-admin**](https://github.com/z-song/laravel-admin)



## License

MIT