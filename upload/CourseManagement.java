package com;

import java.util.*;

public class CourseManagement {
	private ArrayList<Student> student=new ArrayList<Student>();
	private ArrayList<Course> course=new ArrayList<Course>();
	
	public void addStudent(Student s){
		if(s!=null){
			boolean flag=true;
			for(Student each:student){
				if(each.getRoll_no()==s.getRoll_no())
					flag=false;
			}
			
			if(flag){
				student.add(s);
			}
			
		}
		
	}
	
	public void addCourse(Course c){
		if(c!=null){
			boolean flag=true;
			for(Course each:course){
				if(each.getId()==c.getId())
					flag=false;
			}
			
			if(flag){
				course.add(c);
			}
			
		}
	}
	
	public boolean addStudentToCourse(int course_id,Student s) throws StudentNotFoundException{
		
		if(student.contains(s)){
		
			int indx = 0;
			boolean flag=false;
			for(int i=0;i<course.size();i++){
				if(course.get(i).getId()==course_id){
					indx=i;
					flag=true;
					break;
				}
			}
			
			if(flag){
				ArrayList<Student> cstu=course.get(indx).getStudent();
			
				for(Student each:cstu){
					if(each.getRoll_no()==s.getRoll_no())
						flag=false;
				}
				if(flag){
					cstu.add(s);
					course.get(indx).setStudent(cstu);
				}

			}
			return flag;
		}else{
			throw new StudentNotFoundException();
		}
	}

	public ArrayList<Student> getStudentDetails(int course_id){
		
	
		for(int i=0;i<course.size();i++){
			if(course.get(i).getId()==course_id){
				return course.get(i).getStudent();
			}
		}
		
		return null;
		
	}
	
	public HashMap<Integer, Integer> studentCountMap(){
		
		HashMap<Integer, Integer> scount=new HashMap<Integer, Integer>();
		
		for(Course each:course){
			scount.put(each.getId(), each.getStudent().size());
		}
		
		return scount;
	}
	
}
