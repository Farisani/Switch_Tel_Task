create table personal_details (
    personal_details_id bigint not null unique auto_increment,
    name varchar(250) not null,
    age tinyint,
    role varchar(50) not null,
    primary key(personal_details_id) 
);

create table subject_details(
    subject_details_id bigint not null unique auto_increment,
    subject_name varchar(150) not null,
    primary key(subject_details_id)
);

create table teacher_details (
    teacher_details_id bigint not null unique auto_increment,
    salary_amount bigint not null,
    head_of_grade varchar(3),
    teacher_personal_details_id bigint not null,
    primary key(teacher_details_id),
    foreign key(teacher_personal_details_id)
    references personal_details(personal_details_id)
);

create table subject_details_line(
    subject_details_line_id bigint not null unique auto_increment,
    subject_details_id bigint not null,
    personal_details_id bigint not null,
    relationship varchar(50), /stores whether its subject_teacher or subject_learner/
    primary key(subject_details_line_id),
    foreign key(subject_details_id)
    references subject_details(subject_details_id),
    foreign key(personal_details_id)
    references personal_details(personal_details_id)
);

/*
  The two tables for student and teacher were not normalized in any way. Alot of
  unrelated data was put on the same table, e.g a student's age and which subject 
  a student is doing. This also causes redundant rows when a student has multiple 
  subjects. Another thing that is a problem is scanning through a huge table 
  with redundant data when looking for specific things. E.g looking for all subjects
  being taken or a subject's avegage class mark. The way I have structured the tables
  now shows some level of normalization. It's easier to find specific things and also
  easier to extend the design and include more tables
*/