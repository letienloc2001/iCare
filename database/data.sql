CREATE TABLE doctor
(
    doc_name VARCHAR(50) NOT NULL,
    clinic_number VARCHAR(50),
    doc_id INT NOT NULL,
    street VARCHAR(50),
    ward VARCHAR(50),
    district VARCHAR(50),
    city VARCHAR(50),
    image_url VARCHAR(200),
    description VARCHAR(500),
    star_reviews INT NOT NULL,
    PRIMARY KEY (doc_id)
);

CREATE TABLE patient
(
    patient_name VARCHAR(50) NOT NULL,
    patient_id INT NOT NULL,
    ID VARCHAR(20) NOT NULL,
    age INT NOT NULL,
    house_number VARCHAR(50),
    street VARCHAR(50),
    ward VARCHAR(50),
    district VARCHAR(50),
    city VARCHAR(50),
    image_url VARCHAR(200),
    PRIMARY KEY (patient_id)
);

CREATE TABLE patient2doctor
(
    patient_review VARCHAR(150),
    doctor_answer VARCHAR(150),
    date_registered DATE NOT NULL,
    patient_star INT,
    request_status CHAR(1) NOT NULL,
    initial_condition VARCHAR(250),
    meeting_date DATE NOT NULL,
    meeting_id INT NOT NULL,
    doc_id INT NOT NULL,
    patient_id INT NOT NULL,
    PRIMARY KEY (meeting_id),
    FOREIGN KEY (doc_id) REFERENCES doctor(doc_id),
    FOREIGN KEY (patient_id) REFERENCES patient(patient_id)
);

CREATE TABLE doctor_degree
(
    degree_type VARCHAR(100) NOT NULL,
    degree_name VARCHAR(100) NOT NULL,
    year DATE NOT NULL,
    doc_id INT NOT NULL,
    FOREIGN KEY (doc_id) REFERENCES doctor(doc_id)
);

CREATE TABLE specification
(
    spec_id INT NOT NULL,
    spec_name VARCHAR(50) NOT NULL,
    PRIMARY KEY (spec_id),
    UNIQUE (spec_name)
);

CREATE TABLE admin
(
    admin_name VARCHAR(50) NOT NULL,
    admin_id INT NOT NULL,
    PRIMARY KEY (admin_id)
);

CREATE TABLE doctor_specification
(
    YOE INT,
    doc_id INT NOT NULL,
    spec_id INT NOT NULL,
    PRIMARY KEY (doc_id, spec_id),
    FOREIGN KEY (doc_id) REFERENCES doctor(doc_id),
    FOREIGN KEY (spec_id) REFERENCES specification(spec_id)
);

CREATE TABLE user
(
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    user_type CHAR(1) NOT NULL,
    doc_id INT,
    patient_id INT,
    admin_id INT,
    PRIMARY KEY (email),
    FOREIGN KEY (doc_id) REFERENCES doctor(doc_id),
    FOREIGN KEY (patient_id) REFERENCES patient(patient_id),
    FOREIGN KEY (admin_id) REFERENCES admin(admin_id)
);
