create or replace view list_of_doctors as
    select d.doc_id, d.doc_name, GROUP_CONCAT(s.spec_name) as spec_name, d.district, d.city, d.star_reviews
    from doctor d, doctor_specification as ds, specification as s
    where d.doc_id = ds.doc_id and ds.spec_id = s.spec_id
    group by d.doc_id;

-- Select all doctors with their specifications as a comma separated string and other infos:
-- Name, district, city and stars
select * from list_of_doctors;