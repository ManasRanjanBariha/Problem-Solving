


class FindPeakElement {
    public int findPeakElement(int[] nums) {
        int left=0;
        int right=nums.length-1;
        int n=nums.length;
        while(left<=right)
        {
            int mid=left+(right-left)/2;
            if((mid== 0 || nums[mid]> nums[mid-1]) && (mid==n-1 || nums[mid] > nums[mid+1]))
            {
                return mid;
            }
            else if((mid== 0 || nums[mid]> nums[mid-1])  && (mid==n-1 || nums[mid] < nums[mid+1])  ){
             left=mid+1;   
            }
            else{
                right=mid;
            }
        }
        return -1;
    }
}