create table member (
    num int not null auto_increment,
    id char(20) not null,
    pass char(20) not null,
    name char(20) not null,
    email char(80),
    regist_day char(20),
    primary key(num)
) charset=utf8;