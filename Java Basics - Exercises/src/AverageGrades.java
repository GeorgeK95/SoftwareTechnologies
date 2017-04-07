import java.util.*;
import java.util.stream.Collectors;
import java.util.stream.Stream;

/**
 * Created by George-Lenovo on 4/6/2017.
 */
public class AverageGrades {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = Integer.parseInt(in.nextLine());
        List<Student> students = new ArrayList<Student>();

        for (int i = 0; i < n; i++) {
            String[] studentInfo = in.nextLine().split(" ");
            String name = studentInfo[0];
            List<Double> grades = new ArrayList<Double>();

            MakeStudents(grades, studentInfo, name, students);
        }

        PrintStudents(students);
    }

    private static void PrintStudents(List<Student> students) {
        Comparator<Student> comparator = Comparator.comparing(stud -> stud.name);
        comparator = comparator.thenComparing(Comparator.comparing(stud -> stud.grade));
        Stream<Student> personStream = students.stream().sorted(comparator);
        List<Student> sortedStudents = personStream.collect(Collectors.toList());

        order(sortedStudents);

        System.out.println(33);
        for (Student stud: sortedStudents) {
            System.out.printf("%s -> %.2f%n", stud.getName(),stud.getGrade());
        }



    }
    private static void order(List<Student> persons) {

        Collections.sort(persons, new Comparator() {

            public int compare(Object o1, Object o2) {

                String x1 = ((Student) o1).getName();
                String x2 = ((Student) o2).getName();
                int sComp = x1.compareTo(x2);

                if (sComp != 0) {
                    return sComp;
                } else {
                    Double y1 = ((Student) o2).getGrade();
                    Double y2 = ((Student) o1).getGrade();
                    return x1.compareTo(x2);
                }
            }});
    }
    private static void MakeStudents(List<Double> grades, String[] studentInfo, String name, List<Student> students) {
        for (int j = 1; j < studentInfo.length; j++) {
            grades.add(Double.parseDouble(studentInfo[j]));
        }

        Double avgGrade = grades.stream().mapToDouble(val -> val).average().getAsDouble();

        if (avgGrade >= 5) {
            Student student = new Student(avgGrade, name);
            students.add(student);
        }
    }
}

class Student{
    public Double grade;
    public String name;

    public Double getGrade() {
        return grade;
    }

    public void setGrade(Double grade) {
        this.grade = grade;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Student(Double grade, String name) {
        this.grade = grade;
        this.name = name;
    }

    /*public int compareTo(Student p)
    {
        return getName().compareTo(p.getName());
    }

    static class AgeComparator implements Comparator<Student>
    {
        public int compare(Student p1, Student p2)
        {
            double age1 = p1.getGrade();
            double age2 = p2.getGrade();

            if (age1 == age2)
                return 0;
            else if (age1 > age2)
                return 1;
            else
                return -1;
        }
    }*/
}
