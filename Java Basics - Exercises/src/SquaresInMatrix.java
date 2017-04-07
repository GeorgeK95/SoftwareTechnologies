import java.util.Scanner;

/**
 * Created by George-Lenovo on 4/7/2017.
 */
public class SquaresInMatrix {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        int a = in.nextInt();
        int b = in.nextInt();
        char[][] matrix = new char[a][b];

        for (int i = 0; i < a; i++) {
            for (int j = 0; j < b; j++) {
                matrix[i][j] = in.next().charAt(0);
            }
        }

        int count = 0;

        for (int row = 0; row < matrix.length - 1; row++) {
            for (int col = 0; col < matrix[0].length - 1; col++) {
                if (matrix[row][col] == matrix[row][col + 1] && matrix[row + 1][col] == matrix[row + 1][col + 1] && matrix[row][col + 1] == matrix[row + 1][col] && matrix[row][col] == matrix[row + 1][col + 1] && matrix[row][col] == matrix[row + 1][col] && matrix[row][col + 1] == matrix[row + 1][col + 1])
                    count++;
            }
        }
        System.out.println(count);
    }
}
