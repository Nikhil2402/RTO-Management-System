delete from RTO_Branch;
delete from RTO_Branch_Phone_Number;
delete from Issues;
delete from Driver;
delete from Licence;
delete from Driver_Phone_Number;
delete from Takes_Exam;
delete from Vehicle;
delete from Registeration_No;

insert into RTO_Branch values ('MH 01', 'RTO Mumbai(Central)', 'Mumbai', 400034);
insert into RTO_Branch values ('MH 02', 'RTO Mumbai(West)', 'Mumbai', 400053);
insert into RTO_Branch values ('MH 03', 'RTO Mumbai(East)', 'Mumbai', 400037);
insert into RTO_Branch values ('MH 04', 'RTO Thane', 'Thane', 400601);
insert into RTO_Branch values ('MH 05', 'Dy. RTO Kalyan', 'Kalyan(W) Dist. -Thane',421301);
insert into RTO_Branch values ('MH 06', 'Dy. RTO Pen - Raigad', 'Raigad', 402107);
insert into RTO_Branch values ('MH 07', 'Dy.RTO Sindhudurg', 'Sindhudurg', 416812);
insert into RTO_Branch values ('MH 08', 'Dy. RTO Ratnagiri', 'Ratnagiri', 415612);
insert into RTO_Branch values ('MH 09', 'RTO Kolhapur', 'Kolhapur', 416003);
insert into RTO_Branch values ('MH 10', 'Dy.RTO Sangli', 'Sangli', 416416);
insert into RTO_Branch values ('MH 11', 'Dy.RTO Satara', 'Satara', 415001);
insert into RTO_Branch values ('MH 12', 'RTO Pune', 'Pune', 411001);
insert into RTO_Branch values ('MH 13', 'Dy.RTO Solapur', 'Solapur', 413004);
insert into RTO_Branch values ('MH 14', 'Dy. RTO Pimpri-chinchwad', 'Pune', 411019);
insert into RTO_Branch values ('MH 15', 'RTO Nashik', 'Nashik', 422044);
insert into RTO_Branch values ('MH 16', 'Dy.RTO Ahmednagar', 'Ahmednagar', 414001);
insert into RTO_Branch values ('MH 17', 'Dy.RTO Shrirampur', 'Ahemed nagar Shrirampur', 413709);
insert into RTO_Branch values ('MH 18', 'Dy.RTO Dhule', 'Dhule', 424311);
insert into RTO_Branch values ('MH 19', 'Dy.RTO Jalgaon', 'Jalgaon', 425001);
insert into RTO_Branch values ('MH 20', 'RTO Aurangabad', 'Aurangabad', 431001);
insert into RTO_Branch values ('MH 21', 'Dy. RTO Jalna', 'Jalna', 402482);

insert into RTO_Branch_Phone_Number values ('MH 01', '9756314528');
insert into RTO_Branch_Phone_Number values ('MH 01', '9756315528');
insert into RTO_Branch_Phone_Number values ('MH 02', '9757714528');
insert into RTO_Branch_Phone_Number values ('MH 02', '9756342528');
insert into RTO_Branch_Phone_Number values ('MH 03', '9756888528');
insert into RTO_Branch_Phone_Number values ('MH 04', '9750104528');
insert into RTO_Branch_Phone_Number values ('MH 05', '9756317328');
insert into RTO_Branch_Phone_Number values ('MH 06', '7756314528');
insert into RTO_Branch_Phone_Number values ('MH 07', '7956314527');
insert into RTO_Branch_Phone_Number values ('MH 08', '7756314577');
insert into RTO_Branch_Phone_Number values ('MH 08', '7756314457');
insert into RTO_Branch_Phone_Number values ('MH 09', '7756312929');
insert into RTO_Branch_Phone_Number values ('MH 10', '7756314462');
insert into RTO_Branch_Phone_Number values ('MH 11', '7756314690');
insert into RTO_Branch_Phone_Number values ('MH 12', '7756314425');
insert into RTO_Branch_Phone_Number values ('MH 13', '7756311133');
insert into RTO_Branch_Phone_Number values ('MH 13', '7756314673');
insert into RTO_Branch_Phone_Number values ('MH 14', '7556314528');
insert into RTO_Branch_Phone_Number values ('MH 15', '7896314528');
insert into RTO_Branch_Phone_Number values ('MH 16', '7416314528');
insert into RTO_Branch_Phone_Number values ('MH 17', '7321314528');
insert into RTO_Branch_Phone_Number values ('MH 18', '7304314528');
insert into RTO_Branch_Phone_Number values ('MH 18', '886314528');
insert into RTO_Branch_Phone_Number values ('MH 19', '8886314528');
insert into RTO_Branch_Phone_Number values ('MH 20', '8486314528');
insert into RTO_Branch_Phone_Number values ('MH 20', '8976314528');
insert into RTO_Branch_Phone_Number values ('MH 21', '8416314528');
insert into RTO_Branch_Phone_Number values ('MH 21', '7746713528');

insert into Licence values ('MH0120110062821', 514655551234, 'Maharashtra','11-12-2029', 'Class A');
insert into Licence values ('MH0120120063456', 623655557777, 'Maharashtra','05-12-2023', 'Class A');
insert into Licence values ('MH0220130062554', 123655551655, 'Maharashtra','16-12-2025', 'Class B');
insert into Licence values ('MH0320110062694', 894655553241, 'Maharashtra','17-12-2029', 'Class B');
insert into Licence values ('MH0420140063458', 123655554588, 'Maharashtra','26-12-2028', 'Class C');
insert into Licence values ('MH0520150064646', 333555562347, 'Maharashtra','11-12-2020', 'Class D');
insert into Licence values ('MH0620160064841', 664555544744, 'Maharashtra','11-12-2021', 'Class B');
insert into Licence values ('MH0720170069311', 124655556489, 'Maharashtra','27-12-2023', 'Class A');
insert into Licence values ('MH0720140044470', 898655551401, 'Maharashtra','16-12-2024', 'Class A');
insert into Licence values ('MH0820130031524', 514655502301, 'Maharashtra','11-12-2023', 'Class D');
insert into Licence values ('MH0820100064610', 514655550457, 'Maharashtra','11-12-2021', 'Class D');
insert into Licence values ('MH0920160069947', 451655550301, 'Maharashtra','11-12-2020', 'Class C');
insert into Licence values ('MH0920140067623', 201655550508, 'Maharashtra','16-12-2034', 'Class C');
insert into Licence values ('MH1020150064529', 514655550901, 'Maharashtra','11-12-2046', 'Class C');
insert into Licence values ('MH1120110047310', 674655551030, 'Maharashtra','11-12-2025', 'Class A');
insert into Licence values ('MH1120110046023', 452655502154, 'Maharashtra','11-12-2029', 'Class A');
insert into Licence values ('MH1220120064691', 301655551031, 'Maharashtra','11-12-2024', 'Class A');
insert into Licence values ('MH1320120065489', 503655564001, 'Maharashtra','16-12-2023', 'Class B');
insert into Licence values ('MH1320140003187', 584655553172, 'Maharashtra','16-12-2021', 'Class C');
insert into Licence values ('MH1320140062156', 642655551132, 'Maharashtra','11-12-2025', 'Class B');
insert into Licence values ('MH1420100694944', 318655554672, 'Maharashtra','11-12-2021', 'Class C');
insert into Licence values ('MH1420100646315', 314655503998, 'Maharashtra','11-12-2023', 'Class D');
insert into Licence values ('MH1520160062732', 514655544488, 'Maharashtra','11-12-2026', 'Class D');
insert into Licence values ('MH1520160062846', 514655556147, 'Maharashtra','11-12-2029', 'Class D');
insert into Licence values ('MH1620140062455', 953655551302, 'Maharashtra','17-12-2024', 'Class C');
insert into Licence values ('MH1620140493719', 801655557642, 'Maharashtra','17-12-2025', 'Class B');
insert into Licence values ('MH1720120073733', 901655550303, 'Maharashtra','11-12-2025', 'Class B');
insert into Licence values ('MH1720120064697', 648655551582, 'Maharashtra','29-12-2021', 'Class B');
insert into Licence values ('MH1820170064213', 333655551414, 'Maharashtra','29-12-2021', 'Class A');
insert into Licence values ('MH1920170021348', 475655554141, 'Maharashtra','01-12-2024', 'Class A');
insert into Licence values ('MH2020010062767', 694655556231, 'Maharashtra','01-12-2024', 'Class C');
insert into Licence values ('MH2120014673287', 444655551167, 'Maharashtra','01-12-2026', 'Class C');

insert into Driver values (514655551234, 'Nikhil', 'Nandu', 'Ahirkar', 'MH0120110062821');
insert into Driver values (623655557777, 'Moin', 'Abdul', 'Bangi', 'MH0120120063456');
insert into Driver values (123655551655, 'Raj', 'Mohan', 'Sharma', 'MH0220130062554');
insert into Driver values (894655553241, 'Mohan', 'Nikhil', 'Ahirkar', 'MH0320110062694');
insert into Driver values (123655554588, 'Shubham', 'Ganeshrao', 'Badalwad', 'MH0420140063458');
insert into Driver values (333555562347, 'Ganesh', 'Mohan', 'Rathi', 'MH0520150064646');
insert into Driver values (664555544744, 'Nikhi', 'Raj', 'Rathi', 'MH0620160064841');
insert into Driver values (124655556489, 'Erica', 'Jhon', 'DeSouza', 'MH0720170069311');
insert into Driver values (898655551401, 'Spenta', 'Rabel', 'Shroff', 'MH0720140044470');
insert into Driver values (514655502301, 'Rabel', 'Jhon', 'DeSouza', 'MH0820130031524');
insert into Driver values (514655550457, 'Sandeep', 'Raj', 'Shroff', 'MH0820100064610');
insert into Driver values (451655550301, 'Sharukh', 'Salman', 'Khan', 'MH0920160069947');
insert into Driver values (201655550508, 'Salman', 'Sharukh', 'Khan', 'MH0920140067623');
insert into Driver values (514655550901, 'Deepika', 'Prakash', 'Paudkone', 'MH1020150064529');
insert into Driver values (674655551030, 'Anushka', 'Ajay', 'Sharma', 'MH1120110047310');
insert into Driver values (452655502154, 'Priyanka', 'Ashok', 'Chopra', 'MH1120110046023');
insert into Driver values (301655551031, 'Deepali', 'Prakash', 'Patil', 'MH1220120064691');
insert into Driver values (503655564001, 'Dipti', 'Shubham', 'Rathi', 'MH1320120065489');
insert into Driver values (584655553172, 'Ashok', 'Sandeep', 'Patil', 'MH1320140003187');
insert into Driver values (642655551132, 'Ram', 'Mohan', 'Rao', 'MH1320140062156');
insert into Driver values (318655554672, 'Mimoh', 'Mangesh', 'Kulkarni', 'MH1420100694944');
insert into Driver values (314655503998, 'Ajay', 'Prakash', 'Singh', 'MH1420100646315');
insert into Driver values (514655544488, 'Raj', 'Ram', 'Singh', 'MH1520160062732');
insert into Driver values (514655556147, 'Ganesh', 'Rao', 'Patil', 'MH1520160062846');
insert into Driver values (953655551302, 'Jhon', 'Sandeep', 'Lenen', 'MH1620140062455');
insert into Driver values (801655557642, 'Omkar', 'Prakash', 'Patil', 'MH1620140493719');
insert into Driver values (901655550303, 'Akash', 'Omkar', 'Rao', 'MH1720120073733');
insert into Driver values (648655551582, 'Aamir', 'Moin', 'Khan', 'MH1720120064697');
insert into Driver values (333655551414, 'Indrajeet', 'Raj', 'Kumar', 'MH1820170064213');
insert into Driver values (475655554141, 'Ashok', 'Prakash', 'Kumbhar', 'MH1920170021348');
insert into Driver values (694655556231, 'Kriti', 'Prakash', 'Singh', 'MH2020010062767');
insert into Driver values (444655551167, 'Deepika', 'Ajay', 'Patil', 'MH2120014673287');

insert into Driver_Phone_Number values (514655551234, '7745612354');
insert into Driver_Phone_Number values (623655557777, '9881774601');
insert into Driver_Phone_Number values (123655551655, '8713456234');
insert into Driver_Phone_Number values (894655553241, '7556423891');
insert into Driver_Phone_Number values (894655553241, '7006040888');
insert into Driver_Phone_Number values (123655554588, '8430167894');
insert into Driver_Phone_Number values (333555562347, '7412354896');
insert into Driver_Phone_Number values (333555562347, '7456200017');
insert into Driver_Phone_Number values (333555562347, '7111583040');
insert into Driver_Phone_Number values (664555544744, '9814756230');
insert into Driver_Phone_Number values (124655556489, '7468547300');
insert into Driver_Phone_Number values (898655551401, '7766458903');
insert into Driver_Phone_Number values (514655502301, '9884445621');
insert into Driver_Phone_Number values (514655550457, '7931444561');
insert into Driver_Phone_Number values (451655550301, '7774445353');
insert into Driver_Phone_Number values (201655550508, '8888464777');
insert into Driver_Phone_Number values (514655550901, '7956564822');
insert into Driver_Phone_Number values (674655551030, '7315489622');
insert into Driver_Phone_Number values (674655551030, '7544488780');
insert into Driver_Phone_Number values (452655502154, '8863388716');
insert into Driver_Phone_Number values (301655551031, '8855447779');
insert into Driver_Phone_Number values (503655564001, '8846255513');
insert into Driver_Phone_Number values (584655553172, '8856444890');
insert into Driver_Phone_Number values (642655551132, '8444223131');
insert into Driver_Phone_Number values (318655554672, '9444866712');
insert into Driver_Phone_Number values (314655503998, '9233225256');
insert into Driver_Phone_Number values (314655503998, '9224425252');
insert into Driver_Phone_Number values (314655503998, '9050804011');
insert into Driver_Phone_Number values (514655544488, '9449644648');
insert into Driver_Phone_Number values (514655556147, '8998775648');
insert into Driver_Phone_Number values (953655551302, '8466494700');
insert into Driver_Phone_Number values (801655557642, '9456572121');
insert into Driver_Phone_Number values (901655550303, '7568878790');
insert into Driver_Phone_Number values (648655551582, '8145677004');
insert into Driver_Phone_Number values (333655551414, '7888488800');
insert into Driver_Phone_Number values (333655551414, '7812354670');
insert into Driver_Phone_Number values (475655554141, '7664477900');
insert into Driver_Phone_Number values (694655556231, '8484654006');
insert into Driver_Phone_Number values (444655551167, '7220082030');

insert into Takes_Exam values (514655551234, 'MH 01', '14-11-2010', 'ESE01');
insert into Takes_Exam values (623655557777, 'MH 02', '14-12-2012', 'ESE02');
insert into Takes_Exam values (123655551655, 'MH 03', '18-07-2014', 'ESE03');
insert into Takes_Exam values (894655553241, 'MH 04', '14-17-2015', 'ESE01');
insert into Takes_Exam values (333555562347, 'MH 05', '14-11-2017', 'ESE01');
insert into Takes_Exam values (514655544488, 'MH 06', '07-09-2015', 'ESE02');
insert into Takes_Exam values (314655503998, 'MH 07', '14-04-2016', 'ESE02');
insert into Takes_Exam values (898655551401, 'MH 08', '15-07-2016', 'ESE01');
insert into Takes_Exam values (503655564001, 'MH 08', '24-09-2016', 'ESE03');
insert into Takes_Exam values (318655554672, 'MH 09', '26-10-2014', 'ESE03');
insert into Takes_Exam values (694655556231, 'MH 09', '28-02-2015', 'ESE02');

insert into Issues values ('MH0120110062821', 'MH 01', '01-01-2017');
insert into Issues values ('MH0120120063456', 'MH 01', '02-02-2017');
insert into Issues values ('MH0220130062554', 'MH 02', '17-02-2017');
insert into Issues values ('MH0320110062694', 'MH 03', '25-12-2016');
insert into Issues values ('MH0420140063458', 'MH 04', '15-03-2017');
insert into Issues values ('MH0520150064646', 'MH 05', '04-01-2017');
insert into Issues values ('MH0620160064841', 'MH 06', '02-02-2017');
insert into Issues values ('MH0720170069311', 'MH 07', '05-03-2017');
insert into Issues values ('MH0720140044470', 'MH 07', '09-05-2017');
insert into Issues values ('MH0820130031524', 'MH 08', '17-03-2017');
insert into Issues values ('MH0820100064610', 'MH 08', '18-03-2017');
insert into Issues values ('MH0920160069947', 'MH 09', '07-05-2017');
insert into Issues values ('MH0920140067623', 'MH 09', '28-05-2017');
insert into Issues values ('MH1020150064529', 'MH 10', '18-06-2017');
insert into Issues values ('MH1120110047310', 'MH 11', '25-06-2017');
insert into Issues values ('MH1120110046023', 'MH 11', '01-07-2017');
insert into Issues values ('MH1220120064691', 'MH 12', '01-07-2017');
insert into Issues values ('MH1320120065489', 'MH 13', '01-01-2017');
insert into Issues values ('MH1320140003187', 'MH 13', '01-01-2017');
insert into Issues values ('MH1320140062156', 'MH 13', '02-02-2017');
insert into Issues values ('MH1420100694944', 'MH 14', '15-02-2017');
insert into Issues values ('MH1420100646315', 'MH 14', '20-10-2017');
insert into Issues values ('MH1520160062732', 'MH 15', '22-09-2017');
insert into Issues values ('MH1520160062846', 'MH 15', '15-05-2017');
insert into Issues values ('MH1620140062455', 'MH 16', '14-07-2017');
insert into Issues values ('MH1620140493719', 'MH 16', '18-06-2017');
insert into Issues values ('MH1720120073733', 'MH 17', '19-01-2017');
insert into Issues values ('MH1720120064697', 'MH 17', '01-07-2017');
insert into Issues values ('MH1820170064213', 'MH 18', '05-07-2017');
insert into Issues values ('MH1920170021348', 'MH 19', '08-05-2017');
insert into Issues values ('MH2020010062767', 'MH 20', '01-03-2017');
insert into Issues values ('MH2120014673287', 'MH 21', '01-02-2017');

insert into Vehicle values ( '2 Wheeler', 'Yamaha', 'Yamaha Ray Z', '10015', '15-12-27', 514655551234);
insert into Vehicle values ( '2 Wheeler', 'Hero', 'Hero Pleasure', '10025', '16-12-25', 623655557777); 
insert into Vehicle values ( '2 Wheeler', 'Mahindra', 'Mahindra Duro DZ ', '10026', '20-02-23', 894655553241); 
insert into Vehicle values ( '2 Wheeler', 'Mahindra', 'Mahindra Rodeo RZ', '10027', '15-12-27', 123655554588); 
insert into Vehicle values ( '2 Wheeler', 'Vespa', 'Vespa LX125', '10010', '15-12-27', 333555562347); 
insert into Vehicle values ( '2 Wheeler', 'Suzuki', 'Suzuki Swish', '10012', '05-05-25', 664555544744); 
insert into Vehicle values ( '2 Wheeler', 'Honda', 'Honda Dio', '10017', '15-05-29', 514655551234); 
insert into Vehicle values ( '2 Wheeler', 'Honda', 'Honda Activa-i', '10022', '16-12-26', 514655550457); 
insert into Vehicle values ( '4 Wheeler', 'Maruti', 'Maruti Suzuki Celerio', '10035', '15-10-27', 318655554672); 
insert into Vehicle values ( '4 Wheeler', 'Hyundai', 'Hyundai Creta', '10036', '08-12-29', 514655551234); 
insert into Vehicle values ( '4 Wheeler', 'Renault', 'Renault Kwid', '10045', '03-12-30', 318655554672); 
insert into Vehicle values ( '4 Wheeler', 'Maruti', 'Maruti Alto', '10046', '31-12-29', 801655557642); 
insert into Vehicle values ( '4 Wheeler', 'Tata', 'Tata Tiago', '1047', '25-12-25', 801655557642); 
insert into Vehicle values ( '4 Wheeler', 'Datsun', 'Datsun Redi-GO', '10048', '26-06-26', 514655551234); 
insert into Vehicle values ( '4 Wheeler', 'Tata', 'Tata Nano GenX', '10049', '15-12-25', 444655551167); 
insert into Vehicle values ( '4 Wheeler', 'Honda', 'Honda Jazz', '10050', '27-12-27', 801655557642); 
insert into Vehicle values ( '4 Wheeler', 'Tata', 'Tata ACE ZIP ', '10051', '09-09-27', 664555544744); 
insert into Vehicle values ( '4 Wheeler', 'Tata', 'Tata ACE ', '10077', '15-06-2025', 514655551234); 
insert into Vehicle values ( '4 Wheeler', 'Mahindra', 'Mahindra Jeeto ', '10078', '05-12-27', 514655550457); 
insert into Vehicle values ( '4 Wheeler', 'Mahindra', 'Mahindra Maxximo ', '10088', '15-08-27', 623655557777); 
insert into Vehicle values ( '4 Wheeler', 'Mahindra', 'Mahindra Supro Minitruck ', '10100', '04-04-28', 123655554588); 

insert into Registeration_No values ('1000', 'V', 'C', 'Yamaha Ray Z', '10015', 'MH 01');
insert into Registeration_No values ('1001', 'V', 'C', 'Hero Pleasure', '10025', 'MH 01');
insert into Registeration_No values ('1002', 'V', 'C', 'Mahindra Duro DZ ', '10026', 'MH 02');
insert into Registeration_No values ('1003', 'V', 'C', 'Mahindra Rodeo RZ', '10027', 'MH 03');
insert into Registeration_No values ('1004', 'V', 'C', 'Suzuki Swish', '10012', 'MH 04');
insert into Registeration_No values ('1005', 'V', 'C', 'Honda Dio', '10017', 'MH 04');
insert into Registeration_No values ('1006', 'V', 'C', 'Honda Activa-i', '10022', 'MH 05');
insert into Registeration_No values ('1007', 'V', 'C', 'Maruti Suzuki Celerio', '10035', 'MH 06');
insert into Registeration_No values ('1008', 'V', 'C', 'Hyundai Creta', '10036', 'MH 07');
insert into Registeration_No values ('1009', 'V', 'C', 'Renault Kwid', '10045', 'MH 08');
insert into Registeration_No values ('1010', 'V', 'C', 'Maruti Alto', '10046', 'MH 08');
insert into Registeration_No values ('1011', 'V', 'C', 'Datsun Redi-GO', '10048', 'MH 09');
insert into Registeration_No values ('1012', 'V', 'C', 'Tata Nano GenX', '10049', 'MH 10');
insert into Registeration_No values ('1013', 'V', 'C', 'Honda Jazz', '10050', 'MH 11');
insert into Registeration_No values ('1014', 'V', 'C', 'Tata ACE ZIP ', '10051', 'MH 12');
insert into Registeration_No values ('1015', 'V', 'C', 'Tata ACE ', '10077', 'MH 13');
insert into Registeration_No values ('1016', 'V', 'C', 'Mahindra Jeeto ', '10078', 'MH 13');
insert into Registeration_No values ('1017', 'V', 'C', 'Mahindra Maxximo ', '10088', 'MH 13');
insert into Registeration_No values ('1018', 'V', 'C', 'Mahindra Supro Minitruck ', '10100', 'MH 14');
insert into Registeration_No values ('1019', 'V', 'C', 'Vespa LX125', '10010', 'MH 15');
insert into Registeration_No values ('1020', 'V', 'C', 'Tata Tiago', '1047', 'MH 16');
