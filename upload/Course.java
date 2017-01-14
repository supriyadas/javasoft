package com;

import java.util.ArrayList;

public class Course {
	private int id;
	private int duration;
	private String name;
	private ArrayList<Student> student=new ArrayList<Student>();
	
	public Course(int id, int duration, String name) {
		this.id = id;
		this.duration = duration;
		this.name = name;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public int getDuration() {
		return duration;
	}

	public void setDuration(int duration) {
		this.duration = duration;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public ArrayList<Student> getStudent() {
		return student;
	}

	public void setStudent(ArrayList<Student> student) {
		this.student = student;
	}
	
}
