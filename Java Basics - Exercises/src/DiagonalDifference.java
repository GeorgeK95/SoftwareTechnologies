import java.util.Scanner;

/**
 * Created by George-Lenovo on 4/7/2017.
 */
public class DiagonalDifference {
    static Scanner in = new Scanner(System.in);

    public static void main(String[] args) {
        int n = Integer.parseInt(in.nextLine());

        int[][] matrix = getMatrix(n);
        int primaryDiagonal = getDiagonalSum(matrix, true);
        int secondaryDiagonal = getDiagonalSum(matrix, false);

        System.out.println(Math.abs(primaryDiagonal - secondaryDiagonal));
    }

    private static int getDiagonalSum(int[][] matrix, boolean diagonal) {
        int n = matrix.length;
        int sum = 0;

        if (diagonal) {
            for (int i = 0; i < n; i++) {
                sum += matrix[i][i];
            }
        } else {
            int j = 0;

            for (int i = n - 1; i >= 0; i--) {
                sum += matrix[j][i];
                j++;
            }
        }

        return sum;
    }

    private static int[][] getMatrix(int n) {
        int[][] matrix = new int[n][n];

        //  Scanner in = new Scanner(System.in);
        for (int i = 0; i < n; i++) {
            String[] line = in.nextLine().split(" ");

            for (int j = 0; j < line.length; j++) {
                matrix[i][j] = Integer.parseInt(line[j]);
            }
        }

        return matrix;
    }
}
