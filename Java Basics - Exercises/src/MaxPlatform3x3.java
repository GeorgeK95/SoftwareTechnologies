import java.util.Scanner;

/**
 * Created by George-Lenovo on 4/7/2017.
 */
public class MaxPlatform3x3 {
    static Scanner in = new Scanner(System.in);

    public static void main(String[] args) {
        int a = in.nextInt();
        int b = in.nextInt();
        long arr[][] = fillMatrix(a, b);
        findAndPrintBestSum(arr, a, b);
    }

    private static void findAndPrintBestSum(long[][] arr, int a, int b) {
        long bestSum = Integer.MIN_VALUE;
        int bestCol = 0, bestRow = 0;

        for (int i = 0; i < a - 2; i++) {
            for (int j = 0; j < b - 2; j++) {
                long sum = arr[i][j] + arr[i][j + 1] + arr[i][j + 2] +
                        arr[i + 1][j] + arr[i + 1][j + 1] + arr[i + 1][j + 2] +
                        arr[i + 2][j] + arr[i + 2][j + 1] + arr[i + 2][j + 2];

                if (sum > bestSum) {
                    bestSum = sum;
                    bestRow = i;
                    bestCol = j;
                }
            }
        }

        PrintResult(bestCol, bestRow, bestSum, arr);
    }

    private static void PrintResult(int bestCol, int bestRow, long bestSum, long[][] arr) {
        System.out.println(bestSum);
        System.out.print(arr[bestRow][bestCol] + " " + arr[bestRow][bestCol + 1] + " " + arr[bestRow][bestCol + 2] + "\n" + arr[bestRow + 1][bestCol] + " " + arr[bestRow + 1][bestCol + 1] + " " + arr[bestRow + 1][bestCol + 2] + "\n" + arr[bestRow + 2][bestCol] + " " + arr[bestRow + 2][bestCol + 1] + " " + arr[bestRow + 2][bestCol + 2]);
    }

    private static long[][] fillMatrix(int a, int b) {
        long[][] arr = new long[a][b];

        for (int i = 0; i < a; i++) {
            for (int j = 0; j < b; j++) {
                arr[i][j] = in.nextLong();
            }
        }

        return arr;
    }
}
