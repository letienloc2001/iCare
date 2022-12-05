-- Insert doctor data
INSERT INTO `doctor` (`doc_name`, `clinic_number`, `doc_id`, `street`, `ward`, `district`, `city`, `image_url`, `description`, `star_reviews`) VALUES
('Hung Cuong', '119', 1, 'K', 'Di An', 'Di An', 'Dĩ An', '', 'Very handsome', 5),
('Victor Reyes', '225', 2, 'Ly Thuong Kiet', '18', '1', 'Ho Chi Minh', NULL, 'Enthusiastic', 4),
('Desiree Ashley', '5', 3, 'Pasteur', '5', '1', 'Ho Chi Minh', NULL, 'Enthusiastic', 5),
('Michael Ferrell', '17', 4, 'Copse Square', '5', 'Brooklyn', 'New York', NULL, 'Enthusiastic', 5),
('Belle Stafford', '10', 5, 'Copse Square', '5', 'Brooklyn', 'New York', NULL, 'Enthusiastic', 4),
('Chase Serrano', '25', 6, 'Queens Croft', '10', 'Manhattan', 'New York', NULL, 'Enthusiastic', 3),
('Rae Morris', '100', 7, 'Cressington Avenue', '2', 'Queens', 'New York', NULL, 'Enthusiastic', 4),
('Lawrence Mills', '20', 8, 'Ambleside Sidings', '2', 'Stalen Island', 'New York', NULL, 'Enthusiastic', 4),
('Brooke Lane', '1', 9, 'Long Mimms', '2', 'Stalen Island', 'New York', NULL, 'Enthusiastic', 5),
('Kyra Chen', '1919', 10, 'Flowers Cir', 'Thomasville', 'Georgia(GA)', 'New York', NULL, 'Enthusiastic', 5),
('Rinah Underwood', '418', 11, 'Bogus Rd', 'Stockholm,', 'Evelyn Crest', 'Wisconsin(WI)', NULL, 'Enthusiastic', 3),
('Rinah Rosevelt', '10', 12, 'Bogus Rd', 'Stockholm,', 'Evelyn Crest', 'Wisconsin(WI)', NULL, 'Enthusiastic', 4),
('Boris Stafford', '231', 13, 'Dunkirk Road South', 'Stockholm,', 'Evelyn Crest', 'Wisconsin(WI)', NULL, 'Enthusiastic', 4),
('Ria Chan', '700', 14, 'Morreene Rd', 'Durham,', '', 'North Carolina(NC)', NULL, 'Enthusiastic', 4),
('Tasha Beard', '11948', 15, 'State 29 Rte', 'New Knoxville,', '', 'Ohio(OH)', NULL, 'Enthusiastic', 5),
('Zia Fulton', '372', 16, 'Spruce Glen Rd', 'Lexington', '', 'South Carolina(SC)', NULL, 'Enthusiastic', 3),
('Minerva Huffman', '67', 17, 'Moor Way Grn #4', 'Henrietta', '', 'New York(NY)', NULL, 'Enthusiastic', 5);

-- Insert patient data
INSERT INTO `patient` (`patient_name`, `patient_id`, `ID`, `age`, `house_number`, `street`, `ward`, `district`, `city`, `image_url`) VALUES
('Kaseem Kennedy', 1, '001', 18, '5331', 'Rexford Court', '', 'Camden', 'Maine(ME)', NULL),
('Finn Cook', 2, '002', 20, '8642', 'Yule Street', '', 'Elsberry', 'Missouri(MO)', NULL),
('Berk Garner', 3, '003', 14, '1693', 'Alice Court', '', 'Berwick', 'Louisiana(LA)', NULL),
('Acton Frye', 4, '004', 23, '915', 'Heath Drive', '', 'Warren', 'Michigan(MI)', NULL),
('Aidan Francis', 5, '005', 21, '19141', 'Pine Ridge Circle', '', 'Newington', 'Connecticut(CT)', NULL),
('Michael Garcia', 6, '006', 20, '4001', 'Anderson Road', '', 'Clementon', 'New Jersey(NJ)', NULL),
('Iliana Maldonado', 7, '007', 21, '6095', 'Terry Lane', '', 'Deep Gap', 'North Carolina(NC)', NULL),
('Jerry Eaton', 8, '008', 19, '4016', 'Doane Street', '', 'Lawrence', 'Michigan(MI)', NULL),
('Kalia Peterson', 9, '009', 25, '225', 'Eastridge Circle', '', 'North Liberty', 'Iowa(IA)', NULL),
('Davis Gardner', 10, '010', 22, '100', 'Naples Avenue', '', 'Hopewell Junction', 'New York(NY)', NULL),
('Constance Hunt', 11, '00011', 10, '450', 'Rolling Rapids Rd', '', 'Humble', 'Texas(TX)', NULL),
('Wynne Cherry', 12, '00012', 30, '510', 'W Exchange St', '', 'Ridgewood', 'Indiana(IN)', NULL),
('Rajah English', 13, '00013', 40, '230', 'Burnside Pl', '', 'Braham', 'Minnesota(MN)', NULL),
('Lee Berry', 14, '00014', 35, '1120', 'Ayers Rd', '', 'Palmyra', 'Illinois(IL)', NULL),
('Jakeem Butler', 15, '00015', 45, '2501', 'June Apple Dr', '', 'Moneta', 'Georgia(GA)', NULL);

-- Insert admin
INSERT INTO `admin`(`admin_name`, `admin_id`) VALUES 
('cuong',1),
('loc',2);

-- Insert User
INSERT INTO `user`(`email`, `password`, `user_type`, `doc_id`, `patient_id`, `admin_id`) 
VALUES 
('doc1@gmail.com','cuong123','d',1,NULL,NULL),
('doc2@gmail.com','cuong123','d',2,NULL,NULL),
('doc3@gmail.com','cuong123','d',3,NULL,NULL),
('doc4@gmail.com','cuong123','d',4,NULL,NULL),
('doc5@gmail.com','cuong123','d',5,NULL,NULL),
('doc6@gmail.com','cuong123','d',6,NULL,NULL),
('doc7@gmail.com','cuong123','d',7,NULL,NULL),
('doc8@gmail.com','cuong123','d',8,NULL,NULL),
('doc9@gmail.com','cuong123','d',9,NULL,NULL),
('doc1NULL@gmail.com','cuong123','d',10,NULL,NULL),
('doc11@gmail.com','cuong123','d',11,NULL,NULL),
('doc12@gmail.com','cuong123','d',12,NULL,NULL),
('doc13@gmail.com','cuong123','d',13,NULL,NULL),
('doc14@gmail.com','cuong123','d',14,NULL,NULL),
('doc15@gmail.com','cuong123','d',15,NULL,NULL),
('doc16@gmail.com','cuong123','d',16,NULL,NULL),
('doc17@gmail.com','cuong123','d',17,NULL,NULL),
('pat1@gmail.com','cuong123','p',NULL,1,NULL),
('pat2@gmail.com','cuong123','p',NULL,2,NULL),
('pat3@gmail.com','cuong123','p',NULL,3,NULL),
('pat4@gmail.com','cuong123','p',NULL,4,NULL),
('pat5@gmail.com','cuong123','p',NULL,5,NULL),
('pat6@gmail.com','cuong123','p',NULL,6,NULL),
('pat7@gmail.com','cuong123','p',NULL,7,NULL),
('pat8@gmail.com','cuong123','p',NULL,8,NULL),
('pat9@gmail.com','cuong123','p',NULL,9,NULL),
('pat1NULL@gmail.com','cuong123','p',NULL,10,NULL),
('pat11@gmail.com','cuong123','p',NULL,11,NULL),
('pat12@gmail.com','cuong123','p',NULL,12,NULL),
('pat13@gmail.com','cuong123','p',NULL,13,NULL),
('pat14@gmail.com','cuong123','p',NULL,14,NULL),
('pat15@gmail.com','cuong123','p',NULL,15,NULL),
('cuong@gmail.com', 'cuong', 'a', NULL, NULL, 1), 
('loc@gmail.com', 'loc', 'a', NULL, NULL, 2);

-- Insert doctor's degree
INSERT INTO `doctor_degree`(`degree_type`, `degree_name`, `year`, `doc_id`) VALUES 
('Bachelor','Bachelor of Medicine','2010-04-09','1'),
('Bachelor','Bachelor of Surgery','2011-02-28','2'),
('Bachelor','Bachelor of Dental Surgery','2010-01-24','3'),
('Bachelor','Bachelor of Ayurvedic Medicine and Surgery','2009-03-04','4'),
('Bachelor','Bachelor of Unani Medicine and Surgery','2001-01-05','5'),
('Bachelor','Bachelor of Homeopathy Medicine and Surgery','2015-04-03','6'),
('Bachelor','Bachelor of Veterinary Sciences and Animal Husbandry','2001-04-09','7'),
('Bachelor','Bachelor of Ayurvedic Medicine and Surgery','1999-05-05','8'),
('Bachelor','Bachelor of Homeopathy Medicine and Surgery','2001-02-09','9'),
('Bachelor','Bachelor of Veterinary Sciences and Animal Husbandry','2008-09-02','10'),
('Bachelor','Bachelor of Unani Medicine and Surgery','2008-01-01','11'),
('Bachelor','Bachelor of Ayurvedic Medicine and Surgery','2008-06-06','12'),
('Bachelor','Bachelor of Homeopathy Medicine and Surgery','2008-02-02','13'),
('Bachelor','Bachelor of Veterinary Sciences and Animal Husbandry','2008-02-04','14'),
('Bachelor','Bachelor of Ayurvedic Medicine and Surgery','2003-04-02','15'),
('Bachelor','Bachelor of Unani Medicine and Surgery','2001-01-03','16'),
('Bachelor','Bachelor of Veterinary Sciences and Animal Husbandry','2009-03-06','17')

-- Insert into specification
INSERT INTO `specification` (`spec_id`, `spec_name`) VALUES
(1, 'Accident and emergency medicine'),
(2, 'Allergology'),
(3, 'Anaesthetics'),
(4, 'Biological hematology'),
(5, 'Cardiology'),
(6, 'Child psychiatry'),
(7, 'Clinical biology'),
(8, 'Clinical chemistry'),
(9, 'Clinical neurophysiology'),
(10, 'Clinical radiology'),
(11, 'Dental, oral and maxillo-facial surgery'),
(12, 'Dermato-venerology'),
(13, 'Dermatology'),
(14, 'Endocrinology'),
(15, 'Gastro-enterologic surgery'),
(16, 'Gastroenterology'),
(17, 'General hematology'),
(18, 'General Practice'),
(19, 'General surgery'),
(20, 'Geriatrics'),
(21, 'Immunology'),
(22, 'Infectious diseases'),
(23, 'Internal medicine'),
(24, 'Laboratory medicine'),
(25, 'Maxillo-facial surgery'),
(26, 'Microbiology'),
(27, 'Nephrology'),
(28, 'Neuro-psychiatry'),
(29, 'Neurology'),
(30, 'Neurosurgery'),
(31, 'Nuclear medicine'),
(32, 'Obstetrics and gynecology'),
(33, 'Occupational medicine'),
(34, 'Ophthalmology'),
(35, 'Orthopaedics'),
(36, 'Otorhinolaryngology'),
(37, 'Paediatric surgery'),
(38, 'Paediatrics'),
(39, 'Pathology'),
(40, 'Pharmacology'),
(41, 'Physical medicine and rehabilitation'),
(42, 'Plastic surgery'),
(43, 'Podiatric Medicine'),
(44, 'Podiatric Surgery'),
(45, 'Psychiatry'),
(46, 'Public health and Preventive Medicine'),
(47, 'Radiology'),
(48, 'Radiotherapy'),
(49, 'Respiratory medicine'),
(50, 'Rheumatology'),
(51, 'Stomatology'),
(52, 'Thoracic surgery'),
(53, 'Tropical medicine'),
(54, 'Urology'),
(55, 'Vascular surgery'),
(56, 'Venereology');

-- insert doc_specification
INSERT INTO `doctor_specification` (`YOE`, `doc_id`, `spec_id`) VALUES
(9, 1, 35),
(15, 4, 5),
(10, 5, 4),
(14, 7, 11),
(9, 9, 3),
(12, 13, 12),
(11, 14, 21),
(10, 16, 16),
(5, 17, 14);

-- Insert patient2doctor
INSERT INTO `patient2doctor`(`patient_review`, `doctor_answer`, `date_registered`, `patient_star`, `request_status`, `initial_condition`, `meeting_date`, `meeting_id`,`doc_id`, `patient_id`) VALUES 
('nice','do more exercise','2019-04-09',4,'a','stomachache, headache', '2019-04-12', 1, 1, 2),
('nice','do more exercise','2015-05-05',5,'a','fever, chills', '2019-05-10', 2,2,5),
('nice','do more exercise','2017-06-010',3,'a','cough, headache', '2017-06-12', 3,3,10),
('nice','do more exercise','2017-02-01',4,'a','Shortness of breath or difficulty breathing', '2017-02-12', 4,4,1),
('nice','do more exercise','2020-04-03',5,'a','Muscle or body aches', '2020-04-12', 5,5,3),
('nice','do more exercise','2022-02-09',3,'a','Sore throat', '2022-02-12', 6,6,15),
('nice','do more exercise','2021-09-02',4,'a','Congestion or runny nose', '2021-09-12', 7,7,12),
('nice','do more exercise','2022-06-06',5,'a','Diarrhea', '2022-06-12', 8,8,14),
('nice','do more exercise','2022-04-03',3,'a','stomachache, headache', '2022-04-12', 9,9,7),
('nice','do more exercise','2022-04-03',3,'a','Congestion or runny nose', '2022-04-12', 10,10,4),
('nice','do more exercise','2022-04-03',3,'a','Nausea or vomiting', '2022-04-12', 11,9,13);