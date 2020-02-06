# HOW TO START

```

composer create-project --prefer-dist laravel/laravel blog
프로젝트 생성.

.env 파일 
DB_DATABASE=chat <--- 스키마이름 혹은 디비이름 설정

php artisan preset none <-- 설정 없애준다.
php artisan preset vue <-- 뷰를 설정해준다

composer require laravel-frontend-presets/tailwindcss <-- 테일윈드 css 설치해준다
php artisan preset tailwindcss-auth <-- 프로젝트 내에 설치해준다

npm install 디펜던시 설치

npm run dev  --> resources 에 있는 프론트단을 public 폴더에 빌드시켜줌. 노드의 npm run build? 비슷한것같다

php artisan migrate --> 디비에 테이블 생성된다

npm run watch ---> 자동으로 감시해서 컴파일 해준다

php artisan make:model 테이블이름 -c -m      -----> db 정보 생성해서 마이그레이트할 수 있게 만들어줌. database 폴더안에 만들어진다. -c 컨트롤러도 같이만들어짐. -m 모델도 같이 만들어짐


```



```

프론트엔드는 public 폴더임. 켤때는 npm run dev

```