create database music_world_db;
use music_world_db;

create table categories
(
    category_id int primary key auto_increment,
    name        varchar(50) not null,
    song_id     int
);

create table singers
(
    singer_id   int primary key auto_increment,
    name        varchar(50) not null,
    image       varchar(50),
    nationality varchar(30),
    description text,
    birth_year  smallint,
    gender      tinyint     not null,
    song_id     int
);

create table albums
(
    album_id      int primary key auto_increment,
    name          varchar(50) not null,
    released_date date,
    singer_id     int,
    image         varchar(50),
    views         int,
    constraint albums_singers_fk foreign key (singer_id) references singers(singer_id)
);

create table songs
(
    song_id       int auto_increment primary key,
    name          varchar(50) not null,
    released_date date,
    lyrics        text,
    file_name     varchar(50),
    image         varchar(50),
    views         int,
    category_id   int,
    singer_id     int,
    album_id      int,
    constraint songs_categories_fk foreign key (category_id) references categories(category_id) on delete set null,
    constraint songs_albums_fk foreign key (album_id) references albums(album_id) on delete set null
);

create table users
(
    user_id   int primary key auto_increment,
    username  varchar(20) not null,
    password  text        not null,
    email     varchar(50) not null,
    role      varchar(10),
    review_id int
);

create table reviews
(
    review_id int primary key auto_increment,
    content text not null,
    singer_id int,
    album_id int,
    user_id int,
    released_date datetime default current_timestamp,
    constraint reviews_users_fk foreign key (user_id) references users(user_id) on delete set null,
    constraint reviews_album_fk foreign key (album_id) references albums(album_id) on delete cascade,
    constraint reviews_singers_fk foreign key (singer_id) references singers(singer_id) on delete cascade
);

create table songs_singers (
    song_id int,
    singer_id int,
    constraint songs_singers_songs_fk foreign key (song_id) references songs(song_id) on delete cascade,
    constraint songs_singers_singers_fk foreign key (singer_id) references singers(singer_id) on delete cascade
);