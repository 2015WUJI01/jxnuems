JXNUEMS 安装指南
===

### 1.克隆到本地

```
git clone 
```

### 2.安装依赖

```
composer install
```

### 3.配置数据库
```
//若本地无 .env 文件, 则拷贝一份
cp .env.example .env

//修改 .env 中的 database 部分的配置, 并创建对应数据库
//例如, 创建一个名为 jxnuems 的数据库
...
DB_DATABASE=jxnuems
DB_USERNAME=root
DB_PASSWORD=
...
```

### 4.生成秘钥
在 `.env` 文件中创建秘钥, 若 `APP_KEY` 已有秘钥存在, 则可跳过此步骤
```
php artisan key:generate
```

### 5.数据库迁移
配置好数据库参数后, 即可执行迁移, 创建相应数据表
```
php artisan migrate
//若有报错, 按照提示解决, 清空数据库再次执行迁移
```

> 重新执行迁移命令: `php artisan migrate:refresh`