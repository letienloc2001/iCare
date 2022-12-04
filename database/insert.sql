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
INSERT INTO `user` (`email`, `password`, `user_type`, `doc_id`, `patient_id`, `admin_id`) 
VALUES 
('cuong@gmail.com', 'cuong', 'a', NULL, NULL, '1'), 
('loc@gmail.com', 'loc', 'a', NULL, NULL, '2');

-- Insert User
INSERT INTO `user`(`email`, `password`, `user_type`, `doc_id`, `patient_id`, `admin_id`) 
VALUES 
('doc1@gmail.com','cuong123','d','1','',''),
('doc2@gmail.com','cuong123','d','2','',''),
('doc3@gmail.com','cuong123','d','3','',''),
('doc4@gmail.com','cuong123','d','4','',''),
('doc5@gmail.com','cuong123','d','5','',''),
('doc6@gmail.com','cuong123','d','6','',''),
('doc7@gmail.com','cuong123','d','7','',''),
('doc8@gmail.com','cuong123','d','8','',''),
('doc9@gmail.com','cuong123','d','9','',''),
('doc10@gmail.com','cuong123','d','10','',''),
('doc11@gmail.com','cuong123','d','11','',''),
('doc12@gmail.com','cuong123','d','12','',''),
('doc13@gmail.com','cuong123','d','13','',''),
('doc14@gmail.com','cuong123','d','14','',''),
('doc15@gmail.com','cuong123','d','15','',''),
('doc16@gmail.com','cuong123','d','16','',''),
('doc17@gmail.com','cuong123','d','17','',''),
('pat1@gmail.com','cuong123','p','','1',''),
('pat2@gmail.com','cuong123','p','','2',''),
('pat3@gmail.com','cuong123','p','','3',''),
('pat4@gmail.com','cuong123','p','','4',''),
('pat5@gmail.com','cuong123','p','','5',''),
('pat6@gmail.com','cuong123','p','','6',''),
('pat7@gmail.com','cuong123','p','','7',''),
('pat8@gmail.com','cuong123','p','','8',''),
('pat9@gmail.com','cuong123','p','','9',''),
('pat10@gmail.com','cuong123','p','','10',''),
('pat11@gmail.com','cuong123','','','11',''),
('pat12@gmail.com','cuong123','','','12',''),
('pat13@gmail.com','cuong123','','','13',''),
('pat14@gmail.com','cuong123','','','14',''),
('pat15@gmail.com','cuong123','','','15','')

-- Insert doctor's degree
INSERT INTO `doctor_degree`(`degree_type`, `degree_name`, `year`, `doc_id`) VALUES 
('Bachelor','Bachelor of Medicine','2010-04-09','1'),
('Bachelor','Bachelor of Surgery','2011-12-28','2'),
('Bachelor','Bachelor of Dental Surgery','2010-11-24','3'),
('Bachelor','Bachelor of Ayurvedic Medicine and Surgery','2009-03-04','4'),
('Bachelor','Bachelor of Unani Medicine and Surgery','2001-01-05','5'),
('Bachelor','Bachelor of Homeopathy Medicine and Surgery','2015-04-13','6'),
('Bachelor','Bachelor of Veterinary Sciences and Animal Husbandry','2001-04-09','7'),
('Bachelor','Bachelor of Ayurvedic Medicine and Surgery','1999-05-05','8'),
('Bachelor','Bachelor of Homeopathy Medicine and Surgery','2001-02-09','9'),
('Bachelor','Bachelor of Veterinary Sciences and Animal Husbandry','2008-09-02','10'),
('Bachelor','Bachelor of Unani Medicine and Surgery','2008-01-01','11'),
('Bachelor','Bachelor of Ayurvedic Medicine and Surgery','2008-06-06','12'),
('Bachelor','Bachelor of Homeopathy Medicine and Surgery','2008-12-02','13'),
('Bachelor','Bachelor of Veterinary Sciences and Animal Husbandry','2008-12-04','14'),
('Bachelor','Bachelor of Ayurvedic Medicine and Surgery','2003-04-12','15'),
('Bachelor','Bachelor of Unani Medicine and Surgery','2001-10-03','16'),
('Bachelor','Bachelor of Veterinary Sciences and Animal Husbandry','2009-03-16','17')