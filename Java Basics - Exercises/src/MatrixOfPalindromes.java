import java.util.Scanner;

/**
 * Created by George-Lenovo on 4/7/2017.
 */
public class MatrixOfPalindromes {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        String input = in.nextLine();
        String[] numbers = input.split(" ");

        int rows = Integer.parseInt(numbers[0]);
        int cols = Integer.parseInt(numbers[1]);

        for (int i = 0; i < rows; i ++) {
            for (int j = 0; j < cols; j ++) {
                char firstLetter = (char)(i + 97);
                char secondLetter = (char)(i + 97 + j);
                System.out.print(firstLetter);System.out.print(secondLetter);System.out.print(firstLetter);System.out.print(" ");
            }
            System.out.println();
        }
    }
}
