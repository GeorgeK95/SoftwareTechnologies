import java.util.Scanner;

/**
 * Created by George-Lenovo on 4/6/2017.
 */

public class IntersectionOfCircles {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        String line_1 = in.nextLine();
        String line_2 = in.nextLine();

        double x_1 = Double.parseDouble(line_1.split(" ")[0]);
        double y_1 = Double.parseDouble(line_1.split(" ")[1]);
        double rad_1 = Double.parseDouble(line_1.split(" ")[2]);

        double x_2 = Double.parseDouble(line_2.split(" ")[0]);
        double y_2 = Double.parseDouble(line_2.split(" ")[1]);
        double rad_2 = Double.parseDouble(line_2.split(" ")[2]);

        Point pointCircle1 = new Point(x_1, y_1);
        Circle c1 = new Circle(pointCircle1, rad_1);

        Point pointCircle2 = new Point(x_2, y_2);
        Circle c2 = new Circle(pointCircle2, rad_2);

        if (Circle.Intersect(c1, c2)) {
            System.out.println("Yes");
        } else {
            System.out.println("No");
        }
    }
}

class Point {
    public double x;
    public double y;

    public Point(double x, double y) {
        this.x = x;
        this.y = y;
    }

    public Point() {

    }

}

class Circle {
    Point center;
    double radius;

    public Circle() {

    }

    public Circle(Point center, double radius) {
        this.center = center;
        this.radius = radius;
    }

    public static boolean Intersect(Circle c1, Circle c2) {
        double side_A = Math.abs(c1.center.x - c2.center.x);
        double side_B = Math.abs(c1.center.y - c2.center.y);

        double side_C = Math.sqrt(side_A * side_A + side_B * side_B);
        double sumRadiuses = Math.abs(c1.radius + c2.radius);

        if (side_C <= sumRadiuses) {
            return true;
        }

        return false;

    }
}
