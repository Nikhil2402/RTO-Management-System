create database RTO;
use RTO;

create table RTO_Branch(
	RTO_Code varchar(32), 
	Branch_Name varchar(80),  
	Branch_City varchar(32), 
	STD_Code int, 
	Primary Key (RTO_Code));

create table RTO_Branch_Phone_Number(
	RTO_Code varchar(32),
	Branch_Ph_No varchar(16),
	Primary Key (RTO_Code, Branch_Ph_No),
	foreign key (RTO_Code) references RTO_Branch (RTO_Code)
		on delete cascade);
	
create table Licence(
	Licence_No varchar(32), 
	Aadhaar_No bigint,
	Licence_State varchar(80), 
	Licence_Expiry varchar(80), 
	Licence_Class varchar(80), 
	Primary Key (Licence_No));


create table Driver(
	 Aadhaar_No bigint,
	 F_Name varchar(20),
	 M_Name varchar(20),
	 L_Name varchar(20),
	 Licence_No varchar(32),  
	 Primary Key (Aadhaar_No),
	 foreign key (Licence_No) references Licence (Licence_No)
		on delete cascade);

create table Driver_Phone_Number(
	Aadhaar_No bigint,
	Driver_Ph_No varchar(16),
	Primary Key (Aadhaar_No, Driver_Ph_No),
	foreign key (Aadhaar_No) references Driver (Aadhaar_No)
		on delete cascade);



create table Vehicle(
	Vehicle_Type varchar(32), 
	Company varchar(32), 
	Model_No varchar(32), 
	Insurance_No varchar(32), 
	Validity varchar(32), 
	Aadhaar_No bigint, 
	Primary Key(Model_No, Insurance_No),
	foreign key (Aadhaar_No) references Driver (Aadhaar_No)
		on delete cascade);


create table Issues(
	Licence_No varchar(32), 
	RTO_Code varchar(32), 
	Issuing_Date varchar(32), 
	primary key(Licence_No, RTO_Code),
	foreign key (Licence_No) references Licence (Licence_No)
		on delete cascade,
	foreign key (RTO_Code) references RTO_Branch (RTO_Code)
		on delete cascade);


create table Registeration_No(
	Reg_ID varchar(32), 
	Reg_Type varchar(32), 
	Reg_Desc varchar(80), 
	Model_No varchar(32), 
	Insurance_No varchar(32), 
	RTO_Code varchar(32), 
	primary key(Reg_ID),
	foreign key (RTO_Code) references RTO_Branch (RTO_Code)
		on delete cascade,
	foreign key (Model_No, Insurance_No) references Vehicle (Model_No, Insurance_No)
		on delete cascade);

create table Takes_Exam(
	Aadhaar_No bigint, 
	RTO_Code varchar(32), 
	Exam_Date varchar(32), 
	Exam_Type varchar(32), 
	Primary Key (Aadhaar_No, RTO_Code),
	foreign key (RTO_Code) references RTO_Branch (RTO_Code)
		on delete cascade);

create table User(
	UserID varchar(32), 
	Password varchar(32), 
	Primary Key(UserID));

create table Admin(
	AdminID varchar(32), 
	Password varchar(32), 
	Primary Key(AdminID));
	

